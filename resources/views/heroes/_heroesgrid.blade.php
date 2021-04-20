<div class="row">
      @forelse ($heroes as $heroe)
      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <article class="card">
            {{-- <img style="height: 320px; object-fit: cover;" src="https://gritaradio.com/wp-content/uploads/2020/08/the-boys.jpg" class="card-img-top" alt="poster"> --}}
            <div class="card-body text-truncate">
            <h2>{{$heroe->name}}</h2>
            <p>{{$heroe->company}}</p>
        </article>
      </div>
      @empty
          <h2>Tu lista de Heroes esta Vacia :(</h2>
      @endforelse
      {{$heroes->links()}}
</div>