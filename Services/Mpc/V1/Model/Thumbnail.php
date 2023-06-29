<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Thumbnail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Thumbnail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tar  是否压缩抽帧图片生成tar包 - 0：表示压缩 - 1：表示不压缩
    * out  out
    * params  params
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tar' => 'int',
            'out' => '\HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo',
            'params' => '\HuaweiCloud\SDK\Mpc\V1\Model\ThumbnailPara'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tar  是否压缩抽帧图片生成tar包 - 0：表示压缩 - 1：表示不压缩
    * out  out
    * params  params
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tar' => 'int32',
        'out' => null,
        'params' => null
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
    * tar  是否压缩抽帧图片生成tar包 - 0：表示压缩 - 1：表示不压缩
    * out  out
    * params  params
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tar' => 'tar',
            'out' => 'out',
            'params' => 'params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tar  是否压缩抽帧图片生成tar包 - 0：表示压缩 - 1：表示不压缩
    * out  out
    * params  params
    *
    * @var string[]
    */
    protected static $setters = [
            'tar' => 'setTar',
            'out' => 'setOut',
            'params' => 'setParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tar  是否压缩抽帧图片生成tar包 - 0：表示压缩 - 1：表示不压缩
    * out  out
    * params  params
    *
    * @var string[]
    */
    protected static $getters = [
            'tar' => 'getTar',
            'out' => 'getOut',
            'params' => 'getParams'
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
        $this->container['tar'] = isset($data['tar']) ? $data['tar'] : 1;
        $this->container['out'] = isset($data['out']) ? $data['out'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['tar']) && ($this->container['tar'] > 1)) {
                $invalidProperties[] = "invalid value for 'tar', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['tar']) && ($this->container['tar'] < 0)) {
                $invalidProperties[] = "invalid value for 'tar', must be bigger than or equal to 0.";
            }
        if ($this->container['params'] === null) {
            $invalidProperties[] = "'params' can't be null";
        }
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
    * Gets tar
    *  是否压缩抽帧图片生成tar包 - 0：表示压缩 - 1：表示不压缩
    *
    * @return int|null
    */
    public function getTar()
    {
        return $this->container['tar'];
    }

    /**
    * Sets tar
    *
    * @param int|null $tar 是否压缩抽帧图片生成tar包 - 0：表示压缩 - 1：表示不压缩
    *
    * @return $this
    */
    public function setTar($tar)
    {
        $this->container['tar'] = $tar;
        return $this;
    }

    /**
    * Gets out
    *  out
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo|null
    */
    public function getOut()
    {
        return $this->container['out'];
    }

    /**
    * Sets out
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo|null $out out
    *
    * @return $this
    */
    public function setOut($out)
    {
        $this->container['out'] = $out;
        return $this;
    }

    /**
    * Gets params
    *  params
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ThumbnailPara
    */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
    * Sets params
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ThumbnailPara $params params
    *
    * @return $this
    */
    public function setParams($params)
    {
        $this->container['params'] = $params;
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

