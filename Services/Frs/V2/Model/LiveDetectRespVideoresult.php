<?php

namespace HuaweiCloud\SDK\Frs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LiveDetectRespVideoresult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LiveDetectResp_videoresult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alive  是否是活体。
    * actions  动作列表。
    * picture  检测出最大人脸的图片base64。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alive' => 'bool',
            'actions' => '\HuaweiCloud\SDK\Frs\V2\Model\ActionsList[]',
            'picture' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alive  是否是活体。
    * actions  动作列表。
    * picture  检测出最大人脸的图片base64。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alive' => null,
        'actions' => null,
        'picture' => null
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
    * alive  是否是活体。
    * actions  动作列表。
    * picture  检测出最大人脸的图片base64。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alive' => 'alive',
            'actions' => 'actions',
            'picture' => 'picture'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alive  是否是活体。
    * actions  动作列表。
    * picture  检测出最大人脸的图片base64。
    *
    * @var string[]
    */
    protected static $setters = [
            'alive' => 'setAlive',
            'actions' => 'setActions',
            'picture' => 'setPicture'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alive  是否是活体。
    * actions  动作列表。
    * picture  检测出最大人脸的图片base64。
    *
    * @var string[]
    */
    protected static $getters = [
            'alive' => 'getAlive',
            'actions' => 'getActions',
            'picture' => 'getPicture'
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
        $this->container['alive'] = isset($data['alive']) ? $data['alive'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['picture'] = isset($data['picture']) ? $data['picture'] : null;
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
    * Gets alive
    *  是否是活体。
    *
    * @return bool|null
    */
    public function getAlive()
    {
        return $this->container['alive'];
    }

    /**
    * Sets alive
    *
    * @param bool|null $alive 是否是活体。
    *
    * @return $this
    */
    public function setAlive($alive)
    {
        $this->container['alive'] = $alive;
        return $this;
    }

    /**
    * Gets actions
    *  动作列表。
    *
    * @return \HuaweiCloud\SDK\Frs\V2\Model\ActionsList[]|null
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param \HuaweiCloud\SDK\Frs\V2\Model\ActionsList[]|null $actions 动作列表。
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
        return $this;
    }

    /**
    * Gets picture
    *  检测出最大人脸的图片base64。
    *
    * @return string|null
    */
    public function getPicture()
    {
        return $this->container['picture'];
    }

    /**
    * Sets picture
    *
    * @param string|null $picture 检测出最大人脸的图片base64。
    *
    * @return $this
    */
    public function setPicture($picture)
    {
        $this->container['picture'] = $picture;
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

