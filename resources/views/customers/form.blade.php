@csrf
                    <div class="form-group">
                        <label for="name">Name::</label>
                        <input type="text" name="name"  value=" {{old('name') ?? $customer->name}} "  class="form-control">
                        {{$errors->first('name')}}
                    </div> 
                    
                    <div class="form-group">
                        <label for="name">Email::</label>
                        <input type="email" name="email" value="{{old('email') ?? $customer->email}}" class="form-control">
                        {{$errors->first('email')}}
                    </div>

                    <div class="form-group">
                        <label for="active">Status</label>
                        <select name="active" id="Active" class="form-control">
                            <option value="" disabled> Select Customer status</option>
                            @foreach($customer->activeOptions() as $activeOptionsKey => $activeOptionsValue)
                                <option value=" {{$activeOptionsKey}} " {{$customer->active == $activeOptionsValue ? 'selected' :''}}> {{$activeOptionsValue}}</option>
                            @endforeach
                        </select>
                    </div> 
                    
                    <div class="form-group">
                        <label for="company_id">Company</label>
                        <select name="company_id" id="company_id" class="form-control">
                            <option value="" disabled> Select A Company</option>
                            @foreach($companies as $company)
                            <option value=" {{$company->id}} " {{$company->id == $customer->company_id ? 'selected' : ''}}> {{$company->name}}</option>
                            @endforeach
                        </select>
                    </div>