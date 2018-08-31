A Pen created at CodePen.io. You can find this one at https://codepen.io/tsuhre/pen/GWEpEB.

 Testing out a way of rendering flames.

Algorithm:
 Rather than rendering the flame the traditional way by drawing an image or shape for each particle, I render a path between each particle from right to left. I use additive blending to get the nice coloring. Multiple layers of low alpha create the flickering flame effect.

Pros:
- A simple to implement flame effect
- Looks relatively realistic
- Cheaper to render than drawing images

Cons:
- can't change the alpha value of the individual particles, so flames just sort of pop out of existence

Thoughts:
- One way to avoid the flames suddenly disappearing problem might be to group points locally by distance and then use the algorithm so that the alpha value is tied to the average of the particle heights in the group.