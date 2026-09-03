<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeVolumeChargeModeRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeVolumeChargeModeRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * volumeIds  要修改计费模式的云硬盘id列表，可以填写多个
    * serverId  云硬盘所挂载的虚拟机id, 如果volume_ids中没有多挂载的共享云硬盘，则此参数可无需填写。
    * bssParam  bssParam
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'volumeIds' => 'string[]',
            'serverId' => 'string',
            'bssParam' => '\HuaweiCloud\SDK\Evs\V2\Model\BssParam2'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * volumeIds  要修改计费模式的云硬盘id列表，可以填写多个
    * serverId  云硬盘所挂载的虚拟机id, 如果volume_ids中没有多挂载的共享云硬盘，则此参数可无需填写。
    * bssParam  bssParam
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'volumeIds' => null,
        'serverId' => null,
        'bssParam' => null
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
    * volumeIds  要修改计费模式的云硬盘id列表，可以填写多个
    * serverId  云硬盘所挂载的虚拟机id, 如果volume_ids中没有多挂载的共享云硬盘，则此参数可无需填写。
    * bssParam  bssParam
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'volumeIds' => 'volume_ids',
            'serverId' => 'server_id',
            'bssParam' => 'bss_param'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * volumeIds  要修改计费模式的云硬盘id列表，可以填写多个
    * serverId  云硬盘所挂载的虚拟机id, 如果volume_ids中没有多挂载的共享云硬盘，则此参数可无需填写。
    * bssParam  bssParam
    *
    * @var string[]
    */
    protected static $setters = [
            'volumeIds' => 'setVolumeIds',
            'serverId' => 'setServerId',
            'bssParam' => 'setBssParam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * volumeIds  要修改计费模式的云硬盘id列表，可以填写多个
    * serverId  云硬盘所挂载的虚拟机id, 如果volume_ids中没有多挂载的共享云硬盘，则此参数可无需填写。
    * bssParam  bssParam
    *
    * @var string[]
    */
    protected static $getters = [
            'volumeIds' => 'getVolumeIds',
            'serverId' => 'getServerId',
            'bssParam' => 'getBssParam'
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
        $this->container['volumeIds'] = isset($data['volumeIds']) ? $data['volumeIds'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['bssParam'] = isset($data['bssParam']) ? $data['bssParam'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['volumeIds'] === null) {
            $invalidProperties[] = "'volumeIds' can't be null";
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
    * Gets volumeIds
    *  要修改计费模式的云硬盘id列表，可以填写多个
    *
    * @return string[]
    */
    public function getVolumeIds()
    {
        return $this->container['volumeIds'];
    }

    /**
    * Sets volumeIds
    *
    * @param string[] $volumeIds 要修改计费模式的云硬盘id列表，可以填写多个
    *
    * @return $this
    */
    public function setVolumeIds($volumeIds)
    {
        $this->container['volumeIds'] = $volumeIds;
        return $this;
    }

    /**
    * Gets serverId
    *  云硬盘所挂载的虚拟机id, 如果volume_ids中没有多挂载的共享云硬盘，则此参数可无需填写。
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId 云硬盘所挂载的虚拟机id, 如果volume_ids中没有多挂载的共享云硬盘，则此参数可无需填写。
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets bssParam
    *  bssParam
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\BssParam2|null
    */
    public function getBssParam()
    {
        return $this->container['bssParam'];
    }

    /**
    * Sets bssParam
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\BssParam2|null $bssParam bssParam
    *
    * @return $this
    */
    public function setBssParam($bssParam)
    {
        $this->container['bssParam'] = $bssParam;
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

