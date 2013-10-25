ShoeShine Toolbox
=================

## Tools

### Even or Odd

Outputs 'even' or 'odd' based on a number it receives as a parameter or as tag data. Outputs 'nan' if value is not a number.

**Examples**

`{exp:shoeshine_toolbox:even_or_odd number='4'}`

Outputs the string 'even'

`{exp:shoeshine_toolbox:even_or_odd}5{/exp:shoeshine_toolbox:even_or_odd}`

Outputs the string 'odd'

=====

### Total Segments

Outputs the number of segments in the current URI

**Example**

`{exp:shoeshine_toolbox:total_segments}`

Outputs '2' for http://devot-ee.com/add-ons/shoeshine-toolbox

Note: Does not work if you are using Freebie segments in the URI.

=====

### Random Number

Outputs a random number in a set range. The "from" parameter (default "0") must be lower than "to" parameter (default "100").

**Examples**

`{exp:shoeshine_toolbox:random_number}`

Outputs a number from 0 to 100.

`{exp:shoeshine_toolbox:random_number from="1" to="10"}`

Outputs a number from 1 to 10.


=====

Have fun!