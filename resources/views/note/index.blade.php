<x-layout>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <div class="note-container">
        <a href="{{route('note.create')}}" class="new-note-btn">
            New Note
        </a>
        <div class="notes">
            @foreach ($notes as $note)
                <div class="note">
                    <div class="note-body">
                        {{Str::words($note->note, 30)}}
                    </div>
                    <div class="note-buttons">
                        <a href="{{route('note.show', ['note' => $note])}}" class="note-edit-button">View</a>
                        <a href="{{route('note.edit', ['note' => $note])}}" class="note-edit-button">Edit</a>
                        <button class="note-delete-button">Delete</button>
                    </div>
                </div>    
            @endforeach
            
        </div>
    </div>
</x-layout>
