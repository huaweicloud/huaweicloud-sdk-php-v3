<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateProcessInstanceReqCos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateProcessInstanceReq_cos';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * number  工作项编号
    * issueId  工作项ID
    * issueCategory  工作项类型
    * changeType  变更类型
    * beforeChange  变更前
    * afterChange  变更后
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'number' => 'string',
            'issueId' => 'string',
            'issueCategory' => 'string',
            'changeType' => 'string',
            'beforeChange' => 'string',
            'afterChange' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * number  工作项编号
    * issueId  工作项ID
    * issueCategory  工作项类型
    * changeType  变更类型
    * beforeChange  变更前
    * afterChange  变更后
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'number' => null,
        'issueId' => null,
        'issueCategory' => null,
        'changeType' => null,
        'beforeChange' => null,
        'afterChange' => null
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
    * number  工作项编号
    * issueId  工作项ID
    * issueCategory  工作项类型
    * changeType  变更类型
    * beforeChange  变更前
    * afterChange  变更后
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'number' => 'number',
            'issueId' => 'issue_id',
            'issueCategory' => 'issue_category',
            'changeType' => 'change_type',
            'beforeChange' => 'before_change',
            'afterChange' => 'after_change'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * number  工作项编号
    * issueId  工作项ID
    * issueCategory  工作项类型
    * changeType  变更类型
    * beforeChange  变更前
    * afterChange  变更后
    *
    * @var string[]
    */
    protected static $setters = [
            'number' => 'setNumber',
            'issueId' => 'setIssueId',
            'issueCategory' => 'setIssueCategory',
            'changeType' => 'setChangeType',
            'beforeChange' => 'setBeforeChange',
            'afterChange' => 'setAfterChange'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * number  工作项编号
    * issueId  工作项ID
    * issueCategory  工作项类型
    * changeType  变更类型
    * beforeChange  变更前
    * afterChange  变更后
    *
    * @var string[]
    */
    protected static $getters = [
            'number' => 'getNumber',
            'issueId' => 'getIssueId',
            'issueCategory' => 'getIssueCategory',
            'changeType' => 'getChangeType',
            'beforeChange' => 'getBeforeChange',
            'afterChange' => 'getAfterChange'
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['issueId'] = isset($data['issueId']) ? $data['issueId'] : null;
        $this->container['issueCategory'] = isset($data['issueCategory']) ? $data['issueCategory'] : null;
        $this->container['changeType'] = isset($data['changeType']) ? $data['changeType'] : null;
        $this->container['beforeChange'] = isset($data['beforeChange']) ? $data['beforeChange'] : null;
        $this->container['afterChange'] = isset($data['afterChange']) ? $data['afterChange'] : null;
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
    * Gets number
    *  工作项编号
    *
    * @return string|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string|null $number 工作项编号
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets issueId
    *  工作项ID
    *
    * @return string|null
    */
    public function getIssueId()
    {
        return $this->container['issueId'];
    }

    /**
    * Sets issueId
    *
    * @param string|null $issueId 工作项ID
    *
    * @return $this
    */
    public function setIssueId($issueId)
    {
        $this->container['issueId'] = $issueId;
        return $this;
    }

    /**
    * Gets issueCategory
    *  工作项类型
    *
    * @return string|null
    */
    public function getIssueCategory()
    {
        return $this->container['issueCategory'];
    }

    /**
    * Sets issueCategory
    *
    * @param string|null $issueCategory 工作项类型
    *
    * @return $this
    */
    public function setIssueCategory($issueCategory)
    {
        $this->container['issueCategory'] = $issueCategory;
        return $this;
    }

    /**
    * Gets changeType
    *  变更类型
    *
    * @return string|null
    */
    public function getChangeType()
    {
        return $this->container['changeType'];
    }

    /**
    * Sets changeType
    *
    * @param string|null $changeType 变更类型
    *
    * @return $this
    */
    public function setChangeType($changeType)
    {
        $this->container['changeType'] = $changeType;
        return $this;
    }

    /**
    * Gets beforeChange
    *  变更前
    *
    * @return string|null
    */
    public function getBeforeChange()
    {
        return $this->container['beforeChange'];
    }

    /**
    * Sets beforeChange
    *
    * @param string|null $beforeChange 变更前
    *
    * @return $this
    */
    public function setBeforeChange($beforeChange)
    {
        $this->container['beforeChange'] = $beforeChange;
        return $this;
    }

    /**
    * Gets afterChange
    *  变更后
    *
    * @return string|null
    */
    public function getAfterChange()
    {
        return $this->container['afterChange'];
    }

    /**
    * Sets afterChange
    *
    * @param string|null $afterChange 变更后
    *
    * @return $this
    */
    public function setAfterChange($afterChange)
    {
        $this->container['afterChange'] = $afterChange;
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

