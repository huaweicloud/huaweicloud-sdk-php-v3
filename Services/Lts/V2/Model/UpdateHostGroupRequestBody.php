<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateHostGroupRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateHostGroupRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostGroupId  主机组ID
    * hostGroupName  主机组名称
    * hostIdList  主机ID列表。主机类型必须与主机组类型一致
    * hostGroupTag  主机组标签。KEY不能重复
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostGroupId' => 'string',
            'hostGroupName' => 'string',
            'hostIdList' => 'string[]',
            'hostGroupTag' => '\HuaweiCloud\SDK\Lts\V2\Model\HostGroupTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostGroupId  主机组ID
    * hostGroupName  主机组名称
    * hostIdList  主机ID列表。主机类型必须与主机组类型一致
    * hostGroupTag  主机组标签。KEY不能重复
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostGroupId' => null,
        'hostGroupName' => null,
        'hostIdList' => null,
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
    * hostGroupId  主机组ID
    * hostGroupName  主机组名称
    * hostIdList  主机ID列表。主机类型必须与主机组类型一致
    * hostGroupTag  主机组标签。KEY不能重复
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostGroupId' => 'host_group_id',
            'hostGroupName' => 'host_group_name',
            'hostIdList' => 'host_id_list',
            'hostGroupTag' => 'host_group_tag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostGroupId  主机组ID
    * hostGroupName  主机组名称
    * hostIdList  主机ID列表。主机类型必须与主机组类型一致
    * hostGroupTag  主机组标签。KEY不能重复
    *
    * @var string[]
    */
    protected static $setters = [
            'hostGroupId' => 'setHostGroupId',
            'hostGroupName' => 'setHostGroupName',
            'hostIdList' => 'setHostIdList',
            'hostGroupTag' => 'setHostGroupTag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostGroupId  主机组ID
    * hostGroupName  主机组名称
    * hostIdList  主机ID列表。主机类型必须与主机组类型一致
    * hostGroupTag  主机组标签。KEY不能重复
    *
    * @var string[]
    */
    protected static $getters = [
            'hostGroupId' => 'getHostGroupId',
            'hostGroupName' => 'getHostGroupName',
            'hostIdList' => 'getHostIdList',
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
        $this->container['hostGroupId'] = isset($data['hostGroupId']) ? $data['hostGroupId'] : null;
        $this->container['hostGroupName'] = isset($data['hostGroupName']) ? $data['hostGroupName'] : null;
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
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
        if ($this->container['hostGroupId'] === null) {
            $invalidProperties[] = "'hostGroupId' can't be null";
        }
            if ((mb_strlen($this->container['hostGroupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'hostGroupId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['hostGroupId']) < 36)) {
                $invalidProperties[] = "invalid value for 'hostGroupId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['hostGroupName']) && (mb_strlen($this->container['hostGroupName']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostGroupName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostGroupName']) && (mb_strlen($this->container['hostGroupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostGroupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostGroupName']) && !preg_match("/^(?!\\.)(?!_)(?!.*?\\.$)[\\u4e00-\\u9fa5a-zA-Z0-9-_.]{1,64}$/", $this->container['hostGroupName'])) {
                $invalidProperties[] = "invalid value for 'hostGroupName', must be conform to the pattern /^(?!\\.)(?!_)(?!.*?\\.$)[\\u4e00-\\u9fa5a-zA-Z0-9-_.]{1,64}$/.";
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
    * Gets hostGroupId
    *  主机组ID
    *
    * @return string
    */
    public function getHostGroupId()
    {
        return $this->container['hostGroupId'];
    }

    /**
    * Sets hostGroupId
    *
    * @param string $hostGroupId 主机组ID
    *
    * @return $this
    */
    public function setHostGroupId($hostGroupId)
    {
        $this->container['hostGroupId'] = $hostGroupId;
        return $this;
    }

    /**
    * Gets hostGroupName
    *  主机组名称
    *
    * @return string|null
    */
    public function getHostGroupName()
    {
        return $this->container['hostGroupName'];
    }

    /**
    * Sets hostGroupName
    *
    * @param string|null $hostGroupName 主机组名称
    *
    * @return $this
    */
    public function setHostGroupName($hostGroupName)
    {
        $this->container['hostGroupName'] = $hostGroupName;
        return $this;
    }

    /**
    * Gets hostIdList
    *  主机ID列表。主机类型必须与主机组类型一致
    *
    * @return string[]|null
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[]|null $hostIdList 主机ID列表。主机类型必须与主机组类型一致
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
        return $this;
    }

    /**
    * Gets hostGroupTag
    *  主机组标签。KEY不能重复
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\HostGroupTag[]|null
    */
    public function getHostGroupTag()
    {
        return $this->container['hostGroupTag'];
    }

    /**
    * Sets hostGroupTag
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\HostGroupTag[]|null $hostGroupTag 主机组标签。KEY不能重复
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

