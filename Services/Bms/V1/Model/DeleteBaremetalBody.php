<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteBaremetalBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteBaremetalBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * servers  所需要删除的裸金属服务器列表。
    * deletePublicip  删除裸金属服务器时是否删除裸金属服务器绑定的弹性公网IP。如果选择不删除，则系统仅做解绑定操作，保留弹性公网IP资源。 取值为true或false，默认为false。  true：删除裸金属服务器时会同时删除绑定在裸金属服务器上的弹性公网IP。 false：删除裸金属服务器时，仅解绑定在裸金属服务器上的弹性公网IP，不删除弹性公网IP。
    * deleteVolume  删除裸金属服务器时是否删除裸金属服务器对应的数据盘。如果选择不删除，则系统仅做解绑定操作，保留数据盘资源。 取值为false或true，默认为false。  true：删除裸金属服务器时会同时删除挂载在裸金属服务器上的数据盘。 false：删除裸金属服务器时，仅卸载裸金属服务器上挂载的数据盘，不删除该数据盘。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'servers' => '\HuaweiCloud\SDK\Bms\V1\Model\ServersList[]',
            'deletePublicip' => 'bool',
            'deleteVolume' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * servers  所需要删除的裸金属服务器列表。
    * deletePublicip  删除裸金属服务器时是否删除裸金属服务器绑定的弹性公网IP。如果选择不删除，则系统仅做解绑定操作，保留弹性公网IP资源。 取值为true或false，默认为false。  true：删除裸金属服务器时会同时删除绑定在裸金属服务器上的弹性公网IP。 false：删除裸金属服务器时，仅解绑定在裸金属服务器上的弹性公网IP，不删除弹性公网IP。
    * deleteVolume  删除裸金属服务器时是否删除裸金属服务器对应的数据盘。如果选择不删除，则系统仅做解绑定操作，保留数据盘资源。 取值为false或true，默认为false。  true：删除裸金属服务器时会同时删除挂载在裸金属服务器上的数据盘。 false：删除裸金属服务器时，仅卸载裸金属服务器上挂载的数据盘，不删除该数据盘。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'servers' => null,
        'deletePublicip' => null,
        'deleteVolume' => null
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
    * servers  所需要删除的裸金属服务器列表。
    * deletePublicip  删除裸金属服务器时是否删除裸金属服务器绑定的弹性公网IP。如果选择不删除，则系统仅做解绑定操作，保留弹性公网IP资源。 取值为true或false，默认为false。  true：删除裸金属服务器时会同时删除绑定在裸金属服务器上的弹性公网IP。 false：删除裸金属服务器时，仅解绑定在裸金属服务器上的弹性公网IP，不删除弹性公网IP。
    * deleteVolume  删除裸金属服务器时是否删除裸金属服务器对应的数据盘。如果选择不删除，则系统仅做解绑定操作，保留数据盘资源。 取值为false或true，默认为false。  true：删除裸金属服务器时会同时删除挂载在裸金属服务器上的数据盘。 false：删除裸金属服务器时，仅卸载裸金属服务器上挂载的数据盘，不删除该数据盘。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'servers' => 'servers',
            'deletePublicip' => 'delete_publicip',
            'deleteVolume' => 'delete_volume'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * servers  所需要删除的裸金属服务器列表。
    * deletePublicip  删除裸金属服务器时是否删除裸金属服务器绑定的弹性公网IP。如果选择不删除，则系统仅做解绑定操作，保留弹性公网IP资源。 取值为true或false，默认为false。  true：删除裸金属服务器时会同时删除绑定在裸金属服务器上的弹性公网IP。 false：删除裸金属服务器时，仅解绑定在裸金属服务器上的弹性公网IP，不删除弹性公网IP。
    * deleteVolume  删除裸金属服务器时是否删除裸金属服务器对应的数据盘。如果选择不删除，则系统仅做解绑定操作，保留数据盘资源。 取值为false或true，默认为false。  true：删除裸金属服务器时会同时删除挂载在裸金属服务器上的数据盘。 false：删除裸金属服务器时，仅卸载裸金属服务器上挂载的数据盘，不删除该数据盘。
    *
    * @var string[]
    */
    protected static $setters = [
            'servers' => 'setServers',
            'deletePublicip' => 'setDeletePublicip',
            'deleteVolume' => 'setDeleteVolume'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * servers  所需要删除的裸金属服务器列表。
    * deletePublicip  删除裸金属服务器时是否删除裸金属服务器绑定的弹性公网IP。如果选择不删除，则系统仅做解绑定操作，保留弹性公网IP资源。 取值为true或false，默认为false。  true：删除裸金属服务器时会同时删除绑定在裸金属服务器上的弹性公网IP。 false：删除裸金属服务器时，仅解绑定在裸金属服务器上的弹性公网IP，不删除弹性公网IP。
    * deleteVolume  删除裸金属服务器时是否删除裸金属服务器对应的数据盘。如果选择不删除，则系统仅做解绑定操作，保留数据盘资源。 取值为false或true，默认为false。  true：删除裸金属服务器时会同时删除挂载在裸金属服务器上的数据盘。 false：删除裸金属服务器时，仅卸载裸金属服务器上挂载的数据盘，不删除该数据盘。
    *
    * @var string[]
    */
    protected static $getters = [
            'servers' => 'getServers',
            'deletePublicip' => 'getDeletePublicip',
            'deleteVolume' => 'getDeleteVolume'
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
        $this->container['servers'] = isset($data['servers']) ? $data['servers'] : null;
        $this->container['deletePublicip'] = isset($data['deletePublicip']) ? $data['deletePublicip'] : null;
        $this->container['deleteVolume'] = isset($data['deleteVolume']) ? $data['deleteVolume'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['servers'] === null) {
            $invalidProperties[] = "'servers' can't be null";
        }
        if ($this->container['deletePublicip'] === null) {
            $invalidProperties[] = "'deletePublicip' can't be null";
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
    * Gets servers
    *  所需要删除的裸金属服务器列表。
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\ServersList[]
    */
    public function getServers()
    {
        return $this->container['servers'];
    }

    /**
    * Sets servers
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\ServersList[] $servers 所需要删除的裸金属服务器列表。
    *
    * @return $this
    */
    public function setServers($servers)
    {
        $this->container['servers'] = $servers;
        return $this;
    }

    /**
    * Gets deletePublicip
    *  删除裸金属服务器时是否删除裸金属服务器绑定的弹性公网IP。如果选择不删除，则系统仅做解绑定操作，保留弹性公网IP资源。 取值为true或false，默认为false。  true：删除裸金属服务器时会同时删除绑定在裸金属服务器上的弹性公网IP。 false：删除裸金属服务器时，仅解绑定在裸金属服务器上的弹性公网IP，不删除弹性公网IP。
    *
    * @return bool
    */
    public function getDeletePublicip()
    {
        return $this->container['deletePublicip'];
    }

    /**
    * Sets deletePublicip
    *
    * @param bool $deletePublicip 删除裸金属服务器时是否删除裸金属服务器绑定的弹性公网IP。如果选择不删除，则系统仅做解绑定操作，保留弹性公网IP资源。 取值为true或false，默认为false。  true：删除裸金属服务器时会同时删除绑定在裸金属服务器上的弹性公网IP。 false：删除裸金属服务器时，仅解绑定在裸金属服务器上的弹性公网IP，不删除弹性公网IP。
    *
    * @return $this
    */
    public function setDeletePublicip($deletePublicip)
    {
        $this->container['deletePublicip'] = $deletePublicip;
        return $this;
    }

    /**
    * Gets deleteVolume
    *  删除裸金属服务器时是否删除裸金属服务器对应的数据盘。如果选择不删除，则系统仅做解绑定操作，保留数据盘资源。 取值为false或true，默认为false。  true：删除裸金属服务器时会同时删除挂载在裸金属服务器上的数据盘。 false：删除裸金属服务器时，仅卸载裸金属服务器上挂载的数据盘，不删除该数据盘。
    *
    * @return bool|null
    */
    public function getDeleteVolume()
    {
        return $this->container['deleteVolume'];
    }

    /**
    * Sets deleteVolume
    *
    * @param bool|null $deleteVolume 删除裸金属服务器时是否删除裸金属服务器对应的数据盘。如果选择不删除，则系统仅做解绑定操作，保留数据盘资源。 取值为false或true，默认为false。  true：删除裸金属服务器时会同时删除挂载在裸金属服务器上的数据盘。 false：删除裸金属服务器时，仅卸载裸金属服务器上挂载的数据盘，不删除该数据盘。
    *
    * @return $this
    */
    public function setDeleteVolume($deleteVolume)
    {
        $this->container['deleteVolume'] = $deleteVolume;
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

