<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ $message }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<script>
    $(function() {
        // Select the alert element
        var alert = $('.alert');

        // Show the alert
        alert.show();

        // Hide the alert after 3 seconds
        setTimeout(function() {
            alert.alert('close');
        }, 1000);
    });
</script>