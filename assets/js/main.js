function delete_count()
{   
     Swal.fire({
        title: 'Are you sure?',
        text: "You won't to delete your profile!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Deleted!',
            'Your profile has been deleted.',
            'success'
          )
          window.location.href="../scripts.php/editepage.script.php?delete_count=true"
        }
      })
    
} 