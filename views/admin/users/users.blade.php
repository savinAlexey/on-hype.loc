@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Управление пользователями</h2>
        <table class="table">
            <thead>
            <tr>
                <th>Имя</th>
                <th>Email</th>
                <th>Роли</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <form action="{{ route('admin.users.roles', $user) }}" method="POST">
                            @csrf
                            <select name="roles[]" multiple class="form-select">
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}"
                                        {{ $user->roles->contains($role->id) ? 'selected' : '' }}>
                                        {{ $role->name }}
                                    </option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-sm btn-primary mt-2">
                                Сохранить
                            </button>
                        </form>
                    </td>
                    <td>
                        <!-- Дополнительные действия -->
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
@endsection

