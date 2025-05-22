<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchAssociatedIssue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchAssociatedIssue';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceIssueId  关联工作项ID
    * subject  工作项标题
    * issueId  工作项ID
    * project  project
    * user  user
    * status  status
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceIssueId' => 'int',
            'subject' => 'string',
            'issueId' => 'int',
            'project' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleProject',
            'user' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUser',
            'status' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\StatusVo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceIssueId  关联工作项ID
    * subject  工作项标题
    * issueId  工作项ID
    * project  project
    * user  user
    * status  status
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceIssueId' => 'int32',
        'subject' => null,
        'issueId' => 'int32',
        'project' => null,
        'user' => null,
        'status' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * sourceIssueId  关联工作项ID
    * subject  工作项标题
    * issueId  工作项ID
    * project  project
    * user  user
    * status  status
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceIssueId' => 'source_issue_id',
            'subject' => 'subject',
            'issueId' => 'issue_id',
            'project' => 'project',
            'user' => 'user',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceIssueId  关联工作项ID
    * subject  工作项标题
    * issueId  工作项ID
    * project  project
    * user  user
    * status  status
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceIssueId' => 'setSourceIssueId',
            'subject' => 'setSubject',
            'issueId' => 'setIssueId',
            'project' => 'setProject',
            'user' => 'setUser',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceIssueId  关联工作项ID
    * subject  工作项标题
    * issueId  工作项ID
    * project  project
    * user  user
    * status  status
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceIssueId' => 'getSourceIssueId',
            'subject' => 'getSubject',
            'issueId' => 'getIssueId',
            'project' => 'getProject',
            'user' => 'getUser',
            'status' => 'getStatus'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['sourceIssueId'] = isset($data['sourceIssueId']) ? $data['sourceIssueId'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['issueId'] = isset($data['issueId']) ? $data['issueId'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets sourceIssueId
    *  关联工作项ID
    *
    * @return int|null
    */
    public function getSourceIssueId()
    {
        return $this->container['sourceIssueId'];
    }

    /**
    * Sets sourceIssueId
    *
    * @param int|null $sourceIssueId 关联工作项ID
    *
    * @return $this
    */
    public function setSourceIssueId($sourceIssueId)
    {
        $this->container['sourceIssueId'] = $sourceIssueId;
        return $this;
    }

    /**
    * Gets subject
    *  工作项标题
    *
    * @return string|null
    */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
    * Sets subject
    *
    * @param string|null $subject 工作项标题
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets issueId
    *  工作项ID
    *
    * @return int|null
    */
    public function getIssueId()
    {
        return $this->container['issueId'];
    }

    /**
    * Sets issueId
    *
    * @param int|null $issueId 工作项ID
    *
    * @return $this
    */
    public function setIssueId($issueId)
    {
        $this->container['issueId'] = $issueId;
        return $this;
    }

    /**
    * Gets project
    *  project
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleProject|null
    */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
    * Sets project
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleProject|null $project project
    *
    * @return $this
    */
    public function setProject($project)
    {
        $this->container['project'] = $project;
        return $this;
    }

    /**
    * Gets user
    *  user
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUser|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUser|null $user user
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\StatusVo|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\StatusVo|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

