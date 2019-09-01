{{-- ユーザーの記事一覧 --}}
    <h2>{{ __('Posts') }}</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{ __('Title') }}</th>
                    <th>{{ __('Body') }}</th>
                    <th>{{ __('Created') }}</th>
                    <th>{{ __('Updated') }}</th>

                    {{-- 記事の編集・削除ボタンのカラム --}}
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user->posts as $post)
                    <tr>
                        <td>
                            <a href="{{ url('posts/' . $post->id) }}">
                                {{ $post->title }}
                            </a>
                        </td>
                        <td>{{ $post->body }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>{{ $post->updated_at }}</td>
                        <td nowrap>
                            <a href="{{ url('posts/' . $post->id . '/edit') }}" class="btn btn-primary">
                                {{ __('編集') }}
                            </a>
                            @component('components.btn-del')
                                @slot('table', 'posts')
                                @slot('id', $post->id)
                            @endcomponent
                        </td>
                     </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $user->posts->links() }}