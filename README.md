# hasCategory for ExpressionEngine
**Easily determine whether an expressionengine entry has a category.**

ExpressionEngine makes it hard to work directly with Categories. Simple tasks like checking whether an entry has a certain category isn't as easy as you'd think. hasCategory is a simple plugin that adds a template tag you can pass to an `if` statement to make building your templates easier.

## Usage

hasCategory has one tag:

```html
{exp:hascategory entry='{entry_id}' category_id='123'}"} // Returns true/false
```

You'll probably want to drop this into an EE conditional, and hasCategory works just fine with that:

```html
{if "{exp:hascategory entry='{entry_id}' category_id='123'}"} [Outputs when entry has the category] {/if}
```

(Note: you'll want to keep the quotes in there so EE doesn't pitch a fit about parse order.)

## Parameters


| Parameter | Explanation  |
|:-------------:| -----|
| entry | The id of the entry you'd like to check for categories |
| category_id | The specific category's ID that you're checking |

## Contributing to hasCategory

In lieu of adding formal contribution guidlines, simply use the current format of the code as it is—tabs, not spaces, with a tab-length of 4. In the interests of performance, I'd like to keep this plugin as slim as possible. If you'd like other features, let me know and I'll see about adding them.

## License 

The MIT License (MIT)

Copyright (c) 2011-2014 Taylor Daughtry.

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
