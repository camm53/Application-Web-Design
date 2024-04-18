{{-- resources/views/partials/notification.blade.php --}}
@if($message)
    <div class="alert alert-success" id="notification">
        {{ $message }}
    </div>
    <script>
        setTimeout(function(){
            document.getElementById('notification').style.display = 'none';
        }, 4000); // 2000 milliseconds = 2 seconds
    </script>
@endif