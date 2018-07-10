<div class="ml-auto">
							{{ Form::open( ['method' => 'GET']) }}

    <div class="align-items-center d-flex flex-row justify-content-end">

								<span class="mr-3">catégories:</span>
								<select name="category"
                                        class="form-control mr-3 form-control-sm">
									<option value="0">Tous</option>
                                    @foreach($categories as $category)
                                        @if ($category === request()->get('category'))
                                            <option value="{{ request()->get('category') }}"
                                                    selected>{{ request()->get('category')
											}}</option>
                                        @else
                                            <option value="{{$category}}">{{str_replace('_',' ',$category)}}</option>
                                        @endif
                                    @endforeach
								</select>

								<span class="mr-3">priority:</span>
								<select name="priority"
                                        class="form-control mr-3 form-control-sm">
									<option value="0">Tous</option>
                                    @foreach($priorities as $priority)
                                        @if ($priority === request()->get('priority'))
                                            <option value="{{ request()->get('priority') }}"
                                                    selected>{{ request()->get('priority')
											}}</option>
                                        @else
                                            <option value="{{$priority}}">{{str_replace('_',' ',$priority)}}</option>
                                        @endif
                                    @endforeach
								</select>

								<span class="mr-3">status:</span>
								<select name="status"
                                        class="form-control mr-3 form-control-sm">
									<option value="0">Tous</option>
                                    @foreach($status as $value)
                                        @if ($value === request()->get('status'))
                                            <option value="{{ request()->get('status') }}"
                                                    selected>{{ request()->get('status')
											}}</option>
                                        @else
                                            <option value="{{$value}}">{{str_replace('_',' ',$value)}}</option>
                                        @endif
                                    @endforeach
								</select>

								<span class="mr-3">type:</span>
								<select name="type"
                                        class="form-control mr-3 form-control-sm">
									<option value="0">Tous</option>
                                    @foreach($types as $key => $value)
                                        @if ($value === request()->get('type'))
                                            <option value="{{ request()->get('type') }}"
                                                    selected>{{ request()->get('type')
											}}</option>
                                        @else
                                            <option value="{{$value}}">{{str_replace('_',' ',$value)}}</option>
                                        @endif
                                    @endforeach
								</select>

								<input type="submit"
                                       value="Filtre"
                                       class="btn btn-success ">
							</div>
    {{ Form::close()}}
</div>
