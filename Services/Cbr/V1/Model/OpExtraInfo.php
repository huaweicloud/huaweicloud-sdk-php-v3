<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OpExtraInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OpExtraInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backup  backup
    * common  common
    * delete  delete
    * sync  sync
    * removeResources  removeResources
    * replication  replication
    * resource  resource
    * restore  restore
    * vaultDelete  vaultDelete
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backup' => '\HuaweiCloud\SDK\Cbr\V1\Model\OpExtendInfoBckup',
            'common' => '\HuaweiCloud\SDK\Cbr\V1\Model\OpExtendInfoCommon',
            'delete' => '\HuaweiCloud\SDK\Cbr\V1\Model\OpExtendInfoDelete',
            'sync' => '\HuaweiCloud\SDK\Cbr\V1\Model\OpExtendInfoSync',
            'removeResources' => '\HuaweiCloud\SDK\Cbr\V1\Model\OpExtendInfoRemoveResources',
            'replication' => '\HuaweiCloud\SDK\Cbr\V1\Model\OpExtendInfoReplication',
            'resource' => '\HuaweiCloud\SDK\Cbr\V1\Model\Resource',
            'restore' => '\HuaweiCloud\SDK\Cbr\V1\Model\OpExtendInfoRestore',
            'vaultDelete' => '\HuaweiCloud\SDK\Cbr\V1\Model\OpExtendInfoVaultDelete'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backup  backup
    * common  common
    * delete  delete
    * sync  sync
    * removeResources  removeResources
    * replication  replication
    * resource  resource
    * restore  restore
    * vaultDelete  vaultDelete
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backup' => null,
        'common' => null,
        'delete' => null,
        'sync' => null,
        'removeResources' => null,
        'replication' => null,
        'resource' => null,
        'restore' => null,
        'vaultDelete' => null
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
    * backup  backup
    * common  common
    * delete  delete
    * sync  sync
    * removeResources  removeResources
    * replication  replication
    * resource  resource
    * restore  restore
    * vaultDelete  vaultDelete
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backup' => 'backup',
            'common' => 'common',
            'delete' => 'delete',
            'sync' => 'sync',
            'removeResources' => 'remove_resources',
            'replication' => 'replication',
            'resource' => 'resource',
            'restore' => 'restore',
            'vaultDelete' => 'vault_delete'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backup  backup
    * common  common
    * delete  delete
    * sync  sync
    * removeResources  removeResources
    * replication  replication
    * resource  resource
    * restore  restore
    * vaultDelete  vaultDelete
    *
    * @var string[]
    */
    protected static $setters = [
            'backup' => 'setBackup',
            'common' => 'setCommon',
            'delete' => 'setDelete',
            'sync' => 'setSync',
            'removeResources' => 'setRemoveResources',
            'replication' => 'setReplication',
            'resource' => 'setResource',
            'restore' => 'setRestore',
            'vaultDelete' => 'setVaultDelete'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backup  backup
    * common  common
    * delete  delete
    * sync  sync
    * removeResources  removeResources
    * replication  replication
    * resource  resource
    * restore  restore
    * vaultDelete  vaultDelete
    *
    * @var string[]
    */
    protected static $getters = [
            'backup' => 'getBackup',
            'common' => 'getCommon',
            'delete' => 'getDelete',
            'sync' => 'getSync',
            'removeResources' => 'getRemoveResources',
            'replication' => 'getReplication',
            'resource' => 'getResource',
            'restore' => 'getRestore',
            'vaultDelete' => 'getVaultDelete'
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
        $this->container['backup'] = isset($data['backup']) ? $data['backup'] : null;
        $this->container['common'] = isset($data['common']) ? $data['common'] : null;
        $this->container['delete'] = isset($data['delete']) ? $data['delete'] : null;
        $this->container['sync'] = isset($data['sync']) ? $data['sync'] : null;
        $this->container['removeResources'] = isset($data['removeResources']) ? $data['removeResources'] : null;
        $this->container['replication'] = isset($data['replication']) ? $data['replication'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['restore'] = isset($data['restore']) ? $data['restore'] : null;
        $this->container['vaultDelete'] = isset($data['vaultDelete']) ? $data['vaultDelete'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['common'] === null) {
            $invalidProperties[] = "'common' can't be null";
        }
        if ($this->container['resource'] === null) {
            $invalidProperties[] = "'resource' can't be null";
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
    * Gets backup
    *  backup
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\OpExtendInfoBckup|null
    */
    public function getBackup()
    {
        return $this->container['backup'];
    }

    /**
    * Sets backup
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\OpExtendInfoBckup|null $backup backup
    *
    * @return $this
    */
    public function setBackup($backup)
    {
        $this->container['backup'] = $backup;
        return $this;
    }

    /**
    * Gets common
    *  common
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\OpExtendInfoCommon
    */
    public function getCommon()
    {
        return $this->container['common'];
    }

    /**
    * Sets common
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\OpExtendInfoCommon $common common
    *
    * @return $this
    */
    public function setCommon($common)
    {
        $this->container['common'] = $common;
        return $this;
    }

    /**
    * Gets delete
    *  delete
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\OpExtendInfoDelete|null
    */
    public function getDelete()
    {
        return $this->container['delete'];
    }

    /**
    * Sets delete
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\OpExtendInfoDelete|null $delete delete
    *
    * @return $this
    */
    public function setDelete($delete)
    {
        $this->container['delete'] = $delete;
        return $this;
    }

    /**
    * Gets sync
    *  sync
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\OpExtendInfoSync|null
    */
    public function getSync()
    {
        return $this->container['sync'];
    }

    /**
    * Sets sync
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\OpExtendInfoSync|null $sync sync
    *
    * @return $this
    */
    public function setSync($sync)
    {
        $this->container['sync'] = $sync;
        return $this;
    }

    /**
    * Gets removeResources
    *  removeResources
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\OpExtendInfoRemoveResources|null
    */
    public function getRemoveResources()
    {
        return $this->container['removeResources'];
    }

    /**
    * Sets removeResources
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\OpExtendInfoRemoveResources|null $removeResources removeResources
    *
    * @return $this
    */
    public function setRemoveResources($removeResources)
    {
        $this->container['removeResources'] = $removeResources;
        return $this;
    }

    /**
    * Gets replication
    *  replication
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\OpExtendInfoReplication|null
    */
    public function getReplication()
    {
        return $this->container['replication'];
    }

    /**
    * Sets replication
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\OpExtendInfoReplication|null $replication replication
    *
    * @return $this
    */
    public function setReplication($replication)
    {
        $this->container['replication'] = $replication;
        return $this;
    }

    /**
    * Gets resource
    *  resource
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\Resource
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\Resource $resource resource
    *
    * @return $this
    */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
        return $this;
    }

    /**
    * Gets restore
    *  restore
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\OpExtendInfoRestore|null
    */
    public function getRestore()
    {
        return $this->container['restore'];
    }

    /**
    * Sets restore
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\OpExtendInfoRestore|null $restore restore
    *
    * @return $this
    */
    public function setRestore($restore)
    {
        $this->container['restore'] = $restore;
        return $this;
    }

    /**
    * Gets vaultDelete
    *  vaultDelete
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\OpExtendInfoVaultDelete|null
    */
    public function getVaultDelete()
    {
        return $this->container['vaultDelete'];
    }

    /**
    * Sets vaultDelete
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\OpExtendInfoVaultDelete|null $vaultDelete vaultDelete
    *
    * @return $this
    */
    public function setVaultDelete($vaultDelete)
    {
        $this->container['vaultDelete'] = $vaultDelete;
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

