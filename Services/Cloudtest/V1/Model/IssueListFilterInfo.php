<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssueListFilterInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssueListFilterInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * iterationIds  迭代id列表
    * piSprints  pi过滤条件
    * subject  需求名
    * moduleId  模块id
    * statusId  需求状态id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'iterationIds' => 'string[]',
            'piSprints' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\IssueListPiFilterInfo[]',
            'subject' => 'string',
            'moduleId' => 'string',
            'statusId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * iterationIds  迭代id列表
    * piSprints  pi过滤条件
    * subject  需求名
    * moduleId  模块id
    * statusId  需求状态id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'iterationIds' => null,
        'piSprints' => null,
        'subject' => null,
        'moduleId' => null,
        'statusId' => null
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
    * iterationIds  迭代id列表
    * piSprints  pi过滤条件
    * subject  需求名
    * moduleId  模块id
    * statusId  需求状态id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'iterationIds' => 'iteration_ids',
            'piSprints' => 'pi_sprints',
            'subject' => 'subject',
            'moduleId' => 'module_id',
            'statusId' => 'status_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * iterationIds  迭代id列表
    * piSprints  pi过滤条件
    * subject  需求名
    * moduleId  模块id
    * statusId  需求状态id
    *
    * @var string[]
    */
    protected static $setters = [
            'iterationIds' => 'setIterationIds',
            'piSprints' => 'setPiSprints',
            'subject' => 'setSubject',
            'moduleId' => 'setModuleId',
            'statusId' => 'setStatusId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * iterationIds  迭代id列表
    * piSprints  pi过滤条件
    * subject  需求名
    * moduleId  模块id
    * statusId  需求状态id
    *
    * @var string[]
    */
    protected static $getters = [
            'iterationIds' => 'getIterationIds',
            'piSprints' => 'getPiSprints',
            'subject' => 'getSubject',
            'moduleId' => 'getModuleId',
            'statusId' => 'getStatusId'
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
        $this->container['iterationIds'] = isset($data['iterationIds']) ? $data['iterationIds'] : null;
        $this->container['piSprints'] = isset($data['piSprints']) ? $data['piSprints'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
        $this->container['statusId'] = isset($data['statusId']) ? $data['statusId'] : null;
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
    * Gets iterationIds
    *  迭代id列表
    *
    * @return string[]|null
    */
    public function getIterationIds()
    {
        return $this->container['iterationIds'];
    }

    /**
    * Sets iterationIds
    *
    * @param string[]|null $iterationIds 迭代id列表
    *
    * @return $this
    */
    public function setIterationIds($iterationIds)
    {
        $this->container['iterationIds'] = $iterationIds;
        return $this;
    }

    /**
    * Gets piSprints
    *  pi过滤条件
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\IssueListPiFilterInfo[]|null
    */
    public function getPiSprints()
    {
        return $this->container['piSprints'];
    }

    /**
    * Sets piSprints
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\IssueListPiFilterInfo[]|null $piSprints pi过滤条件
    *
    * @return $this
    */
    public function setPiSprints($piSprints)
    {
        $this->container['piSprints'] = $piSprints;
        return $this;
    }

    /**
    * Gets subject
    *  需求名
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
    * @param string|null $subject 需求名
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets moduleId
    *  模块id
    *
    * @return string|null
    */
    public function getModuleId()
    {
        return $this->container['moduleId'];
    }

    /**
    * Sets moduleId
    *
    * @param string|null $moduleId 模块id
    *
    * @return $this
    */
    public function setModuleId($moduleId)
    {
        $this->container['moduleId'] = $moduleId;
        return $this;
    }

    /**
    * Gets statusId
    *  需求状态id
    *
    * @return string|null
    */
    public function getStatusId()
    {
        return $this->container['statusId'];
    }

    /**
    * Sets statusId
    *
    * @param string|null $statusId 需求状态id
    *
    * @return $this
    */
    public function setStatusId($statusId)
    {
        $this->container['statusId'] = $statusId;
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

