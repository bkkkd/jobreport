@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('jobreport.title') }}</div>

                <div class="card-body">

                        <div class="row">
                            <label class="col-md-4 col-text-md-right">{{ __('jobreport.company_name') }}</label>

                            <div class="col-md-6">
                                {{ $bean[company_name] }}
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-4 col-text-md-right">{{ __('jobreport.position') }}</label>

                            <div class="col-md-6">
                                {{ $bean.position }}
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-4 col-text-md-right">{{ __('jobreport.price') }}</label>

                            <div class="col-md-6">
                                {{ $bean.price }}
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-4 col-text-md-right">{{ __('jobreport.content') }}</label>

                            <div class="col-md-6">
                                {{ $bean.content }}
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
