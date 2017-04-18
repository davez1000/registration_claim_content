<?php

/**
 * @file
 * Documentation for registration_claim_content.
 */

/**
 * Define hook_registration_claim_content_node_update().
 *
 * Alter The Node object when a user "claims" the node on registration or login.
 *
 * Note: the new user_id is set and there is no need to call $node->save().
 *
 * @param Object $node
 *   The node object.
 */
function hook_registration_claim_content_node_update(Object &$node) {
}
