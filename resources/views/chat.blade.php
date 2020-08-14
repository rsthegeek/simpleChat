@extends('layouts.app')

@section('content')

    <div class="container chats">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card card-default">
                    <div class="card-header">{{ __('app.chats') }}</div>

                    <div class="card-body">
                        <chat-messages :messages="messages"></chat-messages>
                    </div>
                    <div class="card-footer">
                        <chat-form
                                @messagesent="addMessage"
                                :user="{{ auth()->user() }}"
                        ></chat-form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="list-group">
                    <li class="list-group-item" style="background-color: rgba(0, 0, 0, 0.03);">حضار</li>
                    <li class="list-group-item" style="font-size: 0.78rem;" v-for="user in users">
                        @{{ user.name }} <span v-if="user.typing" class="badge badge-primary">{{ __('app.typing') }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection