<?php

namespace App\Filament\Admin\Resources\Posts;

use App\Filament\Admin\Resources\Posts\Pages\CreatePost;
use App\Filament\Admin\Resources\Posts\Pages\EditPost;
use App\Filament\Admin\Resources\Posts\Pages\ListPosts;
use App\Filament\Admin\Resources\Posts\Pages\ViewPost;
use App\Filament\Admin\Resources\Posts\Schemas\PostForm;
use App\Filament\Admin\Resources\Posts\Schemas\PostInfolist;
use App\Filament\Admin\Resources\Posts\Tables\PostsTable;
use App\Models\Category;
use App\Models\Post;
use BackedEnum;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('title')
                ->required()
                ->maxLength(255),
            TextInput::make('slug')
                ->required()
                ->maxLength(255),
            Select::make('category_id')
                ->relationship('category', 'name')
                ->required()
                ->searchable(),
            ColorPicker::make('color')
                ->required(),
            TagsInput::make('tags'),
            FileUpload::make('thumbnail')
                ->image()
                ->directory('posts/thumbnails'),
            MarkdownEditor::make('content')
                ->required()
                ->columnSpanFull(),
            Checkbox::make('is_published')
                ->default(true),
        ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PostInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->query(Post::with(['category', 'user']))
            ->columns(PostsTable::configure($table)->getColumns())
            ->filters(PostsTable::configure($table)->getFilters())
            ->recordActions(PostsTable::configure($table)->getRecordActions())
            ->toolbarActions(PostsTable::configure($table)->getToolbarActions());
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPosts::route('/'),
            'create' => CreatePost::route('/create'),
            'view' => ViewPost::route('/{record}'),
            'edit' => EditPost::route('/{record}/edit'),
        ];
    }
}