<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FgacSingleUpdateReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FgacSingleUpdateReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dwId  数据连接id
    * fgacFlag  是否开启细粒度认证,true表示开启细粒度认证,false表示关闭细粒度认证。
    * fgacType  细粒度认证类型，开启细粒度认证时才生效。\"0\"表示开发态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行，\"1\"表示调度态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行、作业执行调度。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dwId' => 'string',
            'fgacFlag' => 'bool',
            'fgacType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dwId  数据连接id
    * fgacFlag  是否开启细粒度认证,true表示开启细粒度认证,false表示关闭细粒度认证。
    * fgacType  细粒度认证类型，开启细粒度认证时才生效。\"0\"表示开发态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行，\"1\"表示调度态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行、作业执行调度。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dwId' => null,
        'fgacFlag' => null,
        'fgacType' => null
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
    * dwId  数据连接id
    * fgacFlag  是否开启细粒度认证,true表示开启细粒度认证,false表示关闭细粒度认证。
    * fgacType  细粒度认证类型，开启细粒度认证时才生效。\"0\"表示开发态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行，\"1\"表示调度态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行、作业执行调度。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dwId' => 'dw_id',
            'fgacFlag' => 'fgac_flag',
            'fgacType' => 'fgac_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dwId  数据连接id
    * fgacFlag  是否开启细粒度认证,true表示开启细粒度认证,false表示关闭细粒度认证。
    * fgacType  细粒度认证类型，开启细粒度认证时才生效。\"0\"表示开发态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行，\"1\"表示调度态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行、作业执行调度。
    *
    * @var string[]
    */
    protected static $setters = [
            'dwId' => 'setDwId',
            'fgacFlag' => 'setFgacFlag',
            'fgacType' => 'setFgacType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dwId  数据连接id
    * fgacFlag  是否开启细粒度认证,true表示开启细粒度认证,false表示关闭细粒度认证。
    * fgacType  细粒度认证类型，开启细粒度认证时才生效。\"0\"表示开发态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行，\"1\"表示调度态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行、作业执行调度。
    *
    * @var string[]
    */
    protected static $getters = [
            'dwId' => 'getDwId',
            'fgacFlag' => 'getFgacFlag',
            'fgacType' => 'getFgacType'
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
        $this->container['dwId'] = isset($data['dwId']) ? $data['dwId'] : null;
        $this->container['fgacFlag'] = isset($data['fgacFlag']) ? $data['fgacFlag'] : null;
        $this->container['fgacType'] = isset($data['fgacType']) ? $data['fgacType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dwId']) && (mb_strlen($this->container['dwId']) > 100)) {
                $invalidProperties[] = "invalid value for 'dwId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['dwId']) && (mb_strlen($this->container['dwId']) < 1)) {
                $invalidProperties[] = "invalid value for 'dwId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fgacType']) && (mb_strlen($this->container['fgacType']) > 1)) {
                $invalidProperties[] = "invalid value for 'fgacType', the character length must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['fgacType']) && (mb_strlen($this->container['fgacType']) < 1)) {
                $invalidProperties[] = "invalid value for 'fgacType', the character length must be bigger than or equal to 1.";
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
    * Gets dwId
    *  数据连接id
    *
    * @return string|null
    */
    public function getDwId()
    {
        return $this->container['dwId'];
    }

    /**
    * Sets dwId
    *
    * @param string|null $dwId 数据连接id
    *
    * @return $this
    */
    public function setDwId($dwId)
    {
        $this->container['dwId'] = $dwId;
        return $this;
    }

    /**
    * Gets fgacFlag
    *  是否开启细粒度认证,true表示开启细粒度认证,false表示关闭细粒度认证。
    *
    * @return bool|null
    */
    public function getFgacFlag()
    {
        return $this->container['fgacFlag'];
    }

    /**
    * Sets fgacFlag
    *
    * @param bool|null $fgacFlag 是否开启细粒度认证,true表示开启细粒度认证,false表示关闭细粒度认证。
    *
    * @return $this
    */
    public function setFgacFlag($fgacFlag)
    {
        $this->container['fgacFlag'] = $fgacFlag;
        return $this;
    }

    /**
    * Gets fgacType
    *  细粒度认证类型，开启细粒度认证时才生效。\"0\"表示开发态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行，\"1\"表示调度态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行、作业执行调度。
    *
    * @return string|null
    */
    public function getFgacType()
    {
        return $this->container['fgacType'];
    }

    /**
    * Sets fgacType
    *
    * @param string|null $fgacType 细粒度认证类型，开启细粒度认证时才生效。\"0\"表示开发态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行，\"1\"表示调度态细粒度认证，支持数据开发细粒度脚本运行、作业测试运行、作业执行调度。
    *
    * @return $this
    */
    public function setFgacType($fgacType)
    {
        $this->container['fgacType'] = $fgacType;
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

