<script>
  @if(session('created'))
    Swal.fire({
      title: 'Created',
      text: '{{ session('created') }}',
      icon: 'success',
      confirmButtonText: 'OK'
    });
  @endif
  @if(session('success'))
    Swal.fire({
      title: 'Purchased',
      text: '{{ session('success') }}',
      icon: 'success',
      confirmButtonText: 'OK'
    });
  @endif
  @if(session('updated'))
    Swal.fire({
      title: 'Updated',
      text: '{{ session('updated') }}',
      icon: 'success',
      confirmButtonText: 'OK'
    });
  @endif
  @if(session('deleted'))
    Swal.fire({
      title: 'Deleted',
      text: '{{ session('deleted') }}',
      icon: 'success',
      confirmButtonText: 'OK'
    });
  @endif
  @if(session('warning'))
    Swal.fire({
      title: 'Duplicate',
      text: '{{ session('warning') }}',
      icon: 'error',
      confirmButtonText: 'OK'
    });
  @endif
  @if(session('error'))
    Swal.fire({
      title: 'Error',
      text: '{{ session('error') }}',
      icon: 'error',
      confirmButtonText: 'OK'
    });
  @endif
</script>