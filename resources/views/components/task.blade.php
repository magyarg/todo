<div class="row">
    <div class="col-md-2 text-center">
        @if ($task->done)
            <span class="tick"><i class="fa fa-check" aria-hidden="true"></i></span>
        @else
            <span class="ban"><i class="fa fa-ban" aria-hidden="true"></i></span>
        @endif
    </div>
    <div class="col-md-8">
        <h3>{{ $task->name }}</h3>
    </div>
    <div class="col-md-2 text-center">
        @if ($task->done)
			<span class="tick">
				<i class="fa fa-check" aria-hidden="true"></i>
			</span>
        @else
			<span class="ban">
				<i class="fa fa-ban" aria-hidden="true"></i>
			</span>
		@endif
		<span class="cross">
			<i class="fa fa-times" aria-hidden="true"></i>
		</span>
    </div>
</div>