<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkItemFlowRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkItemFlowRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  工作项唯一Id
    * issueCategory  工作项类型
    * flowCode  工作项流转code
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'issueCategory' => 'string',
            'flowCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  工作项唯一Id
    * issueCategory  工作项类型
    * flowCode  工作项流转code
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'issueCategory' => null,
        'flowCode' => null
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
    * id  工作项唯一Id
    * issueCategory  工作项类型
    * flowCode  工作项流转code
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'issueCategory' => 'issue_category',
            'flowCode' => 'flow_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  工作项唯一Id
    * issueCategory  工作项类型
    * flowCode  工作项流转code
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'issueCategory' => 'setIssueCategory',
            'flowCode' => 'setFlowCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  工作项唯一Id
    * issueCategory  工作项类型
    * flowCode  工作项流转code
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'issueCategory' => 'getIssueCategory',
            'flowCode' => 'getFlowCode'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['issueCategory'] = isset($data['issueCategory']) ? $data['issueCategory'] : null;
        $this->container['flowCode'] = isset($data['flowCode']) ? $data['flowCode'] : null;
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
    * Gets id
    *  工作项唯一Id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 工作项唯一Id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    * Gets flowCode
    *  工作项流转code
    *
    * @return string|null
    */
    public function getFlowCode()
    {
        return $this->container['flowCode'];
    }

    /**
    * Sets flowCode
    *
    * @param string|null $flowCode 工作项流转code
    *
    * @return $this
    */
    public function setFlowCode($flowCode)
    {
        $this->container['flowCode'] = $flowCode;
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

