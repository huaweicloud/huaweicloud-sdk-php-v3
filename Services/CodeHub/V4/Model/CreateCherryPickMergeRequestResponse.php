<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCherryPickMergeRequestResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCherryPickMergeRequestResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * state  CherryPick结果
    * title  CherryPick标题
    * cherryPickBranchName  CherryPick临时分支名名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'state' => 'string',
            'title' => 'string',
            'cherryPickBranchName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * state  CherryPick结果
    * title  CherryPick标题
    * cherryPickBranchName  CherryPick临时分支名名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'state' => null,
        'title' => null,
        'cherryPickBranchName' => null
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
    * state  CherryPick结果
    * title  CherryPick标题
    * cherryPickBranchName  CherryPick临时分支名名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'state' => 'state',
            'title' => 'title',
            'cherryPickBranchName' => 'cherry_pick_branch_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * state  CherryPick结果
    * title  CherryPick标题
    * cherryPickBranchName  CherryPick临时分支名名称
    *
    * @var string[]
    */
    protected static $setters = [
            'state' => 'setState',
            'title' => 'setTitle',
            'cherryPickBranchName' => 'setCherryPickBranchName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * state  CherryPick结果
    * title  CherryPick标题
    * cherryPickBranchName  CherryPick临时分支名名称
    *
    * @var string[]
    */
    protected static $getters = [
            'state' => 'getState',
            'title' => 'getTitle',
            'cherryPickBranchName' => 'getCherryPickBranchName'
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
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['cherryPickBranchName'] = isset($data['cherryPickBranchName']) ? $data['cherryPickBranchName'] : null;
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
    * Gets state
    *  CherryPick结果
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state CherryPick结果
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets title
    *  CherryPick标题
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title CherryPick标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets cherryPickBranchName
    *  CherryPick临时分支名名称
    *
    * @return string|null
    */
    public function getCherryPickBranchName()
    {
        return $this->container['cherryPickBranchName'];
    }

    /**
    * Sets cherryPickBranchName
    *
    * @param string|null $cherryPickBranchName CherryPick临时分支名名称
    *
    * @return $this
    */
    public function setCherryPickBranchName($cherryPickBranchName)
    {
        $this->container['cherryPickBranchName'] = $cherryPickBranchName;
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

