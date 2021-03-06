<?php
  /**
   * An interface for GroupHuggable objects based on the PSR-8 specification:
   * https://github.com/php-fig/fig-standards/blob/master/proposed/psr-8-hug/psr-8-hug.md
   */
namespace Psr\Hug;

  /**
   * Defines a huggable object.
   *
   * A huggable object expresses mutual affection with another huggable object.
   */
interface GroupHuggable extends Huggable
{

    /**
     * Hugs a series of huggable objects.
     *
     * When called, this object MUST invoke the hug() method of every object
     * provided. The order of the collection is not significant, and this object
     * MAY hug each of the objects in any order provided that all are hugged.
     *
     * @param $huggables
     *   An array or iterator of objects implementing the Huggable interface.
     */
    public function groupHug($huggables);
}
