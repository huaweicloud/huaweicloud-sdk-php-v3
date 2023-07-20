<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetHostGroupListFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetHostGroupListFilter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostGroupType  主机组类型。windows：windows类型，linux：linux类型
    * hostGroupNameList  主机组名称列表。
    * hostNameList  主机名称列表。
    * hostGroupTag  hostGroupTag
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostGroupType' => 'string',
            'hostGroupNameList' => 'string[]',
            'hostNameList' => 'string[]',
            'hostGroupTag' => '\HuaweiCloud\SDK\Lts\V2\Model\GetHostGroupListTag'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostGroupType  主机组类型。windows：windows类型，linux：linux类型
    * hostGroupNameList  主机组名称列表。
    * hostNameList  主机名称列表。
    * hostGroupTag  hostGroupTag
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostGroupType' => null,
        'hostGroupNameList' => null,
        'hostNameList' => null,
        'hostGroupTag' => null
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
    * hostGroupType  主机组类型。windows：windows类型，linux：linux类型
    * hostGroupNameList  主机组名称列表。
    * hostNameList  主机名称列表。
    * hostGroupTag  hostGroupTag
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostGroupType' => 'host_group_type',
            'hostGroupNameList' => 'host_group_name_list',
            'hostNameList' => 'host_name_list',
            'hostGroupTag' => 'host_group_tag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostGroupType  主机组类型。windows：windows类型，linux：linux类型
    * hostGroupNameList  主机组名称列表。
    * hostNameList  主机名称列表。
    * hostGroupTag  hostGroupTag
    *
    * @var string[]
    */
    protected static $setters = [
            'hostGroupType' => 'setHostGroupType',
            'hostGroupNameList' => 'setHostGroupNameList',
            'hostNameList' => 'setHostNameList',
            'hostGroupTag' => 'setHostGroupTag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostGroupType  主机组类型。windows：windows类型，linux：linux类型
    * hostGroupNameList  主机组名称列表。
    * hostNameList  主机名称列表。
    * hostGroupTag  hostGroupTag
    *
    * @var string[]
    */
    protected static $getters = [
            'hostGroupType' => 'getHostGroupType',
            'hostGroupNameList' => 'getHostGroupNameList',
            'hostNameList' => 'getHostNameList',
            'hostGroupTag' => 'getHostGroupTag'
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
    const HOST_GROUP_TYPE_WINDOWS = 'windows';
    const HOST_GROUP_TYPE_LINUX = 'linux';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHostGroupTypeAllowableValues()
    {
        return [
            self::HOST_GROUP_TYPE_WINDOWS,
            self::HOST_GROUP_TYPE_LINUX,
        ];
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
        $this->container['hostGroupType'] = isset($data['hostGroupType']) ? $data['hostGroupType'] : null;
        $this->container['hostGroupNameList'] = isset($data['hostGroupNameList']) ? $data['hostGroupNameList'] : null;
        $this->container['hostNameList'] = isset($data['hostNameList']) ? $data['hostNameList'] : null;
        $this->container['hostGroupTag'] = isset($data['hostGroupTag']) ? $data['hostGroupTag'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getHostGroupTypeAllowableValues();
                if (!is_null($this->container['hostGroupType']) && !in_array($this->container['hostGroupType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'hostGroupType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets hostGroupType
    *  主机组类型。windows：windows类型，linux：linux类型
    *
    * @return string|null
    */
    public function getHostGroupType()
    {
        return $this->container['hostGroupType'];
    }

    /**
    * Sets hostGroupType
    *
    * @param string|null $hostGroupType 主机组类型。windows：windows类型，linux：linux类型
    *
    * @return $this
    */
    public function setHostGroupType($hostGroupType)
    {
        $this->container['hostGroupType'] = $hostGroupType;
        return $this;
    }

    /**
    * Gets hostGroupNameList
    *  主机组名称列表。
    *
    * @return string[]|null
    */
    public function getHostGroupNameList()
    {
        return $this->container['hostGroupNameList'];
    }

    /**
    * Sets hostGroupNameList
    *
    * @param string[]|null $hostGroupNameList 主机组名称列表。
    *
    * @return $this
    */
    public function setHostGroupNameList($hostGroupNameList)
    {
        $this->container['hostGroupNameList'] = $hostGroupNameList;
        return $this;
    }

    /**
    * Gets hostNameList
    *  主机名称列表。
    *
    * @return string[]|null
    */
    public function getHostNameList()
    {
        return $this->container['hostNameList'];
    }

    /**
    * Sets hostNameList
    *
    * @param string[]|null $hostNameList 主机名称列表。
    *
    * @return $this
    */
    public function setHostNameList($hostNameList)
    {
        $this->container['hostNameList'] = $hostNameList;
        return $this;
    }

    /**
    * Gets hostGroupTag
    *  hostGroupTag
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\GetHostGroupListTag|null
    */
    public function getHostGroupTag()
    {
        return $this->container['hostGroupTag'];
    }

    /**
    * Sets hostGroupTag
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\GetHostGroupListTag|null $hostGroupTag hostGroupTag
    *
    * @return $this
    */
    public function setHostGroupTag($hostGroupTag)
    {
        $this->container['hostGroupTag'] = $hostGroupTag;
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

