<form action="/enroll-course/{{$course->id}}" method="post" enctype="multipart/form-data">
          @csrf
          <button type="submit">Enroll</button>
        </form>