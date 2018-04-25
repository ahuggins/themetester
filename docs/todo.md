# ToDo

1. Fix the DOCTYPE and html opening tag not being included...or really I should say being removed
2. Get "@sections" to be given a name, and a way to at least get the @yield to bring in the right section...doesn't have to make sense, just has to match (I think).
3. Try to look into a @section and see if it is `script` or `style` tags and then append that @section to the `@section('scripts')` or `styles` one.