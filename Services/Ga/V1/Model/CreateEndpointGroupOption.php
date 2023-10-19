<?php

namespace HuaweiCloud\SDK\Ga\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateEndpointGroupOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateEndpointGroupOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  终端节点组名称，取值范围：1~64个字符之间，只能由数字、字母、中划线和中文组成。
    * description  终端节点组描述信息，取值范围：0~255个字符之间，禁止输入字符：<>。
    * trafficDialPercentage  流量拨分到此组的百分比。
    * regionId  终端节点组所属区域ID。
    * listeners  关联监听器列表。一个终端节点组下仅支持关联一个监听器。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'trafficDialPercentage' => 'int',
            'regionId' => 'string',
            'listeners' => '\HuaweiCloud\SDK\Ga\V1\Model\Id[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  终端节点组名称，取值范围：1~64个字符之间，只能由数字、字母、中划线和中文组成。
    * description  终端节点组描述信息，取值范围：0~255个字符之间，禁止输入字符：<>。
    * trafficDialPercentage  流量拨分到此组的百分比。
    * regionId  终端节点组所属区域ID。
    * listeners  关联监听器列表。一个终端节点组下仅支持关联一个监听器。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'trafficDialPercentage' => 'int32',
        'regionId' => null,
        'listeners' => null
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
    * name  终端节点组名称，取值范围：1~64个字符之间，只能由数字、字母、中划线和中文组成。
    * description  终端节点组描述信息，取值范围：0~255个字符之间，禁止输入字符：<>。
    * trafficDialPercentage  流量拨分到此组的百分比。
    * regionId  终端节点组所属区域ID。
    * listeners  关联监听器列表。一个终端节点组下仅支持关联一个监听器。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'trafficDialPercentage' => 'traffic_dial_percentage',
            'regionId' => 'region_id',
            'listeners' => 'listeners'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  终端节点组名称，取值范围：1~64个字符之间，只能由数字、字母、中划线和中文组成。
    * description  终端节点组描述信息，取值范围：0~255个字符之间，禁止输入字符：<>。
    * trafficDialPercentage  流量拨分到此组的百分比。
    * regionId  终端节点组所属区域ID。
    * listeners  关联监听器列表。一个终端节点组下仅支持关联一个监听器。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'trafficDialPercentage' => 'setTrafficDialPercentage',
            'regionId' => 'setRegionId',
            'listeners' => 'setListeners'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  终端节点组名称，取值范围：1~64个字符之间，只能由数字、字母、中划线和中文组成。
    * description  终端节点组描述信息，取值范围：0~255个字符之间，禁止输入字符：<>。
    * trafficDialPercentage  流量拨分到此组的百分比。
    * regionId  终端节点组所属区域ID。
    * listeners  关联监听器列表。一个终端节点组下仅支持关联一个监听器。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'trafficDialPercentage' => 'getTrafficDialPercentage',
            'regionId' => 'getRegionId',
            'listeners' => 'getListeners'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['trafficDialPercentage'] = isset($data['trafficDialPercentage']) ? $data['trafficDialPercentage'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['listeners'] = isset($data['listeners']) ? $data['listeners'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[一-龥A-Za-z0-9-]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[一-龥A-Za-z0-9-]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/[^<>]*/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /[^<>]*/.";
            }
            if (!is_null($this->container['trafficDialPercentage']) && ($this->container['trafficDialPercentage'] > 100)) {
                $invalidProperties[] = "invalid value for 'trafficDialPercentage', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['trafficDialPercentage']) && ($this->container['trafficDialPercentage'] < 0)) {
                $invalidProperties[] = "invalid value for 'trafficDialPercentage', must be bigger than or equal to 0.";
            }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
            if ((mb_strlen($this->container['regionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['regionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[A-Za-z0-9-]*$/", $this->container['regionId'])) {
                $invalidProperties[] = "invalid value for 'regionId', must be conform to the pattern /^[A-Za-z0-9-]*$/.";
            }
        if ($this->container['listeners'] === null) {
            $invalidProperties[] = "'listeners' can't be null";
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
    * Gets name
    *  终端节点组名称，取值范围：1~64个字符之间，只能由数字、字母、中划线和中文组成。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 终端节点组名称，取值范围：1~64个字符之间，只能由数字、字母、中划线和中文组成。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  终端节点组描述信息，取值范围：0~255个字符之间，禁止输入字符：<>。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 终端节点组描述信息，取值范围：0~255个字符之间，禁止输入字符：<>。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets trafficDialPercentage
    *  流量拨分到此组的百分比。
    *
    * @return int|null
    */
    public function getTrafficDialPercentage()
    {
        return $this->container['trafficDialPercentage'];
    }

    /**
    * Sets trafficDialPercentage
    *
    * @param int|null $trafficDialPercentage 流量拨分到此组的百分比。
    *
    * @return $this
    */
    public function setTrafficDialPercentage($trafficDialPercentage)
    {
        $this->container['trafficDialPercentage'] = $trafficDialPercentage;
        return $this;
    }

    /**
    * Gets regionId
    *  终端节点组所属区域ID。
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId 终端节点组所属区域ID。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets listeners
    *  关联监听器列表。一个终端节点组下仅支持关联一个监听器。
    *
    * @return \HuaweiCloud\SDK\Ga\V1\Model\Id[]
    */
    public function getListeners()
    {
        return $this->container['listeners'];
    }

    /**
    * Sets listeners
    *
    * @param \HuaweiCloud\SDK\Ga\V1\Model\Id[] $listeners 关联监听器列表。一个终端节点组下仅支持关联一个监听器。
    *
    * @return $this
    */
    public function setListeners($listeners)
    {
        $this->container['listeners'] = $listeners;
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

