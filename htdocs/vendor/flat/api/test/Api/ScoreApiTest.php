<?php
/**
 * ScoreApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Flat\APIClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Flat API
 *
 * The Flat API allows you to easily extend the abilities of the [Flat Platform](https://flat.io), with a wide range of use cases including the following:  * Creating and importing new music scores using MusicXML or MIDI files * Browsing, updating, copying, exporting the user's scores (for example in MP3, WAV or MIDI) * Managing educational resources with Flat for Education: creating & updating the organization accounts, the classes, rosters and assignments.  The Flat API is built on HTTP. Our API is RESTful It has predictable resource URLs. It returns HTTP response codes to indicate errors. It also accepts and returns JSON in the HTTP body. The [schema](/swagger.yaml) of this API follows the [OpenAPI Initiative (OAI) specification](https://www.openapis.org/), you can use and work with [compatible Swagger tools](http://swagger.io/open-source-integrations/). This API features Cross-Origin Resource Sharing (CORS) implemented in compliance with [W3C spec](https://www.w3.org/TR/cors/).  You can use your favorite HTTP/REST library for your programming language to use Flat's API. This specification and reference is [available on Github](https://github.com/FlatIO/api-reference).  Getting Started and learn more:  * [API Overview and interoduction](https://flat.io/developers/docs/api/) * [Authentication (Personal Access Tokens or OAuth2)](https://flat.io/developers/docs/api/authentication.html) * [SDKs](https://flat.io/developers/docs/api/sdks.html) * [Rate Limits](https://flat.io/developers/docs/api/rate-limits.html) * [Changelog](https://flat.io/developers/docs/api/changelog.html)
 *
 * OpenAPI spec version: 2.6.0
 * Contact: developers@flat.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Flat\APIClient;

use \Flat\APIClient\Configuration;
use \Flat\APIClient\ApiException;
use \Flat\APIClient\ObjectSerializer;

/**
 * ScoreApiTest Class Doc Comment
 *
 * @category Class
 * @package  Flat\APIClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ScoreApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for addScoreCollaborator
     *
     * Add a new collaborator.
     *
     */
    public function testAddScoreCollaborator()
    {
    }

    /**
     * Test case for addScoreTrack
     *
     * Add a new video or audio track to the score.
     *
     */
    public function testAddScoreTrack()
    {
    }

    /**
     * Test case for createScore
     *
     * Create a new score.
     *
     */
    public function testCreateScore()
    {
    }

    /**
     * Test case for createScoreRevision
     *
     * Create a new revision.
     *
     */
    public function testCreateScoreRevision()
    {
    }

    /**
     * Test case for deleteScore
     *
     * Delete a score.
     *
     */
    public function testDeleteScore()
    {
    }

    /**
     * Test case for deleteScoreComment
     *
     * Delete a comment.
     *
     */
    public function testDeleteScoreComment()
    {
    }

    /**
     * Test case for deleteScoreTrack
     *
     * Remove an audio or video track linked to the score.
     *
     */
    public function testDeleteScoreTrack()
    {
    }

    /**
     * Test case for editScore
     *
     * Edit a score's metadata.
     *
     */
    public function testEditScore()
    {
    }

    /**
     * Test case for forkScore
     *
     * Fork a score.
     *
     */
    public function testForkScore()
    {
    }

    /**
     * Test case for gerUserLikes
     *
     * List liked scores.
     *
     */
    public function testGerUserLikes()
    {
    }

    /**
     * Test case for getGroupScores
     *
     * List group's scores.
     *
     */
    public function testGetGroupScores()
    {
    }

    /**
     * Test case for getScore
     *
     * Get a score's metadata.
     *
     */
    public function testGetScore()
    {
    }

    /**
     * Test case for getScoreCollaborator
     *
     * Get a collaborator.
     *
     */
    public function testGetScoreCollaborator()
    {
    }

    /**
     * Test case for getScoreCollaborators
     *
     * List the collaborators.
     *
     */
    public function testGetScoreCollaborators()
    {
    }

    /**
     * Test case for getScoreComments
     *
     * List comments.
     *
     */
    public function testGetScoreComments()
    {
    }

    /**
     * Test case for getScoreRevision
     *
     * Get a score revision.
     *
     */
    public function testGetScoreRevision()
    {
    }

    /**
     * Test case for getScoreRevisionData
     *
     * Get a score revision data.
     *
     */
    public function testGetScoreRevisionData()
    {
    }

    /**
     * Test case for getScoreRevisions
     *
     * List the revisions.
     *
     */
    public function testGetScoreRevisions()
    {
    }

    /**
     * Test case for getScoreSubmissions
     *
     * List submissions related to the score.
     *
     */
    public function testGetScoreSubmissions()
    {
    }

    /**
     * Test case for getScoreTrack
     *
     * Retrieve the details of an audio or video track linked to a score.
     *
     */
    public function testGetScoreTrack()
    {
    }

    /**
     * Test case for getUserScores
     *
     * List user's scores.
     *
     */
    public function testGetUserScores()
    {
    }

    /**
     * Test case for listScoreTracks
     *
     * List the audio or video tracks linked to a score.
     *
     */
    public function testListScoreTracks()
    {
    }

    /**
     * Test case for markScoreCommentResolved
     *
     * Mark the comment as resolved.
     *
     */
    public function testMarkScoreCommentResolved()
    {
    }

    /**
     * Test case for markScoreCommentUnresolved
     *
     * Mark the comment as unresolved.
     *
     */
    public function testMarkScoreCommentUnresolved()
    {
    }

    /**
     * Test case for postScoreComment
     *
     * Post a new comment.
     *
     */
    public function testPostScoreComment()
    {
    }

    /**
     * Test case for removeScoreCollaborator
     *
     * Delete a collaborator.
     *
     */
    public function testRemoveScoreCollaborator()
    {
    }

    /**
     * Test case for untrashScore
     *
     * Untrash a score.
     *
     */
    public function testUntrashScore()
    {
    }

    /**
     * Test case for updateScoreComment
     *
     * Update an existing comment.
     *
     */
    public function testUpdateScoreComment()
    {
    }

    /**
     * Test case for updateScoreTrack
     *
     * Update an audio or video track linked to a score.
     *
     */
    public function testUpdateScoreTrack()
    {
    }
}