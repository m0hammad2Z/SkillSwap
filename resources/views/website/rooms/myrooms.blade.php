@extends('website.layouts.app')

@section('title', 'My Rooms | SkillSwap')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/rooms.css') }}">
@endsection




@section('content')
    <h1 class="section-title">My Rooms</h1>
    <p class="subtitle">View and manage your rooms</p>

    <div class="cards-container">    
 
        <div class="left">
            @if ($rooms->count() == 0)
                <div class="empty" style="text-align: center; margin: 8em auto;">
                    <i class="fas fas fa-door-open" style="font-size: 9em;"></i>
                    <h1>No rooms yet</h1>
                    <p>Once you create a room, it will appear here</p>
                    <button class="cta-button" onclick="window.location.href='/rooms/create'">Create a room</button>
                </div>
            @else
            <div class="cards">
                @foreach($rooms as $room)
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('storage/'.$room->image) }}" alt="">
                        </div>
                        <div class="card-content">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>{{ $room->name }}</h2>
                                </div>
                                <div class="room-card-tags">
                                    <span class="room-card-tag">{{ App\Models\Skill::find($room->skill_to_learn_id)->name }}</span>
                                    <span class="room-card-tag">{{ App\Models\Skill::find($room->skill_to_teach_id)->name }}</span>
                                </div>
                                <p>{{ $room->description }}</p>
                            </div>
                            <div class="card-footer">
                                <div class="card-creator">
                                    <img src="{{ asset('storage/'.$room->user->profile_picture) }}" alt=""><span>{{ $room->user->username }}</span>
                                </div>
                                <a href="/myrooms/{{ $room->id }}" class="cta-button btn">View Room</a>
                            </div>
                        </div>
                    </div>
                
                @endforeach

            </div>
            @endif
        </div>
    </div>

    <hr>
@endsection

