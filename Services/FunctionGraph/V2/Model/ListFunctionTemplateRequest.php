<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFunctionTemplateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFunctionTemplateRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * marker  本次查询起始位置，默认值0
    * maxitems  每次查询获取的最大模板数量。
    * ispublic  是否为公开模板
    * runtime  指定运行时模板
    * scene  指定场景模板
    * service  指定云服务模板
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'marker' => 'string',
            'maxitems' => 'string',
            'ispublic' => 'string',
            'runtime' => 'string',
            'scene' => 'string',
            'service' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * marker  本次查询起始位置，默认值0
    * maxitems  每次查询获取的最大模板数量。
    * ispublic  是否为公开模板
    * runtime  指定运行时模板
    * scene  指定场景模板
    * service  指定云服务模板
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'marker' => null,
        'maxitems' => null,
        'ispublic' => null,
        'runtime' => null,
        'scene' => null,
        'service' => null
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
    * marker  本次查询起始位置，默认值0
    * maxitems  每次查询获取的最大模板数量。
    * ispublic  是否为公开模板
    * runtime  指定运行时模板
    * scene  指定场景模板
    * service  指定云服务模板
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'marker' => 'marker',
            'maxitems' => 'maxitems',
            'ispublic' => 'ispublic',
            'runtime' => 'runtime',
            'scene' => 'scene',
            'service' => 'service'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * marker  本次查询起始位置，默认值0
    * maxitems  每次查询获取的最大模板数量。
    * ispublic  是否为公开模板
    * runtime  指定运行时模板
    * scene  指定场景模板
    * service  指定云服务模板
    *
    * @var string[]
    */
    protected static $setters = [
            'marker' => 'setMarker',
            'maxitems' => 'setMaxitems',
            'ispublic' => 'setIspublic',
            'runtime' => 'setRuntime',
            'scene' => 'setScene',
            'service' => 'setService'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * marker  本次查询起始位置，默认值0
    * maxitems  每次查询获取的最大模板数量。
    * ispublic  是否为公开模板
    * runtime  指定运行时模板
    * scene  指定场景模板
    * service  指定云服务模板
    *
    * @var string[]
    */
    protected static $getters = [
            'marker' => 'getMarker',
            'maxitems' => 'getMaxitems',
            'ispublic' => 'getIspublic',
            'runtime' => 'getRuntime',
            'scene' => 'getScene',
            'service' => 'getService'
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
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['maxitems'] = isset($data['maxitems']) ? $data['maxitems'] : null;
        $this->container['ispublic'] = isset($data['ispublic']) ? $data['ispublic'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
        $this->container['scene'] = isset($data['scene']) ? $data['scene'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 64)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 1)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 1.";
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
    * Gets marker
    *  本次查询起始位置，默认值0
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 本次查询起始位置，默认值0
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets maxitems
    *  每次查询获取的最大模板数量。
    *
    * @return string|null
    */
    public function getMaxitems()
    {
        return $this->container['maxitems'];
    }

    /**
    * Sets maxitems
    *
    * @param string|null $maxitems 每次查询获取的最大模板数量。
    *
    * @return $this
    */
    public function setMaxitems($maxitems)
    {
        $this->container['maxitems'] = $maxitems;
        return $this;
    }

    /**
    * Gets ispublic
    *  是否为公开模板
    *
    * @return string|null
    */
    public function getIspublic()
    {
        return $this->container['ispublic'];
    }

    /**
    * Sets ispublic
    *
    * @param string|null $ispublic 是否为公开模板
    *
    * @return $this
    */
    public function setIspublic($ispublic)
    {
        $this->container['ispublic'] = $ispublic;
        return $this;
    }

    /**
    * Gets runtime
    *  指定运行时模板
    *
    * @return string|null
    */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
    * Sets runtime
    *
    * @param string|null $runtime 指定运行时模板
    *
    * @return $this
    */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;
        return $this;
    }

    /**
    * Gets scene
    *  指定场景模板
    *
    * @return string|null
    */
    public function getScene()
    {
        return $this->container['scene'];
    }

    /**
    * Sets scene
    *
    * @param string|null $scene 指定场景模板
    *
    * @return $this
    */
    public function setScene($scene)
    {
        $this->container['scene'] = $scene;
        return $this;
    }

    /**
    * Gets service
    *  指定云服务模板
    *
    * @return string|null
    */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
    * Sets service
    *
    * @param string|null $service 指定云服务模板
    *
    * @return $this
    */
    public function setService($service)
    {
        $this->container['service'] = $service;
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

