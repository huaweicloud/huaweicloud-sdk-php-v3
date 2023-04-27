<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OpExtendInfoSync implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OpExtendInfoSync';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * syncBackupNum  同步备份副本数
    * deleteBackupNum  删除的备份副本数
    * errSyncBackupNum  同步失败备副本数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'syncBackupNum' => 'int',
            'deleteBackupNum' => 'int',
            'errSyncBackupNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * syncBackupNum  同步备份副本数
    * deleteBackupNum  删除的备份副本数
    * errSyncBackupNum  同步失败备副本数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'syncBackupNum' => 'int32',
        'deleteBackupNum' => 'int32',
        'errSyncBackupNum' => 'int32'
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
    * syncBackupNum  同步备份副本数
    * deleteBackupNum  删除的备份副本数
    * errSyncBackupNum  同步失败备副本数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'syncBackupNum' => 'sync_backup_num',
            'deleteBackupNum' => 'delete_backup_num',
            'errSyncBackupNum' => 'err_sync_backup_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * syncBackupNum  同步备份副本数
    * deleteBackupNum  删除的备份副本数
    * errSyncBackupNum  同步失败备副本数
    *
    * @var string[]
    */
    protected static $setters = [
            'syncBackupNum' => 'setSyncBackupNum',
            'deleteBackupNum' => 'setDeleteBackupNum',
            'errSyncBackupNum' => 'setErrSyncBackupNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * syncBackupNum  同步备份副本数
    * deleteBackupNum  删除的备份副本数
    * errSyncBackupNum  同步失败备副本数
    *
    * @var string[]
    */
    protected static $getters = [
            'syncBackupNum' => 'getSyncBackupNum',
            'deleteBackupNum' => 'getDeleteBackupNum',
            'errSyncBackupNum' => 'getErrSyncBackupNum'
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
        $this->container['syncBackupNum'] = isset($data['syncBackupNum']) ? $data['syncBackupNum'] : null;
        $this->container['deleteBackupNum'] = isset($data['deleteBackupNum']) ? $data['deleteBackupNum'] : null;
        $this->container['errSyncBackupNum'] = isset($data['errSyncBackupNum']) ? $data['errSyncBackupNum'] : null;
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
    * Gets syncBackupNum
    *  同步备份副本数
    *
    * @return int|null
    */
    public function getSyncBackupNum()
    {
        return $this->container['syncBackupNum'];
    }

    /**
    * Sets syncBackupNum
    *
    * @param int|null $syncBackupNum 同步备份副本数
    *
    * @return $this
    */
    public function setSyncBackupNum($syncBackupNum)
    {
        $this->container['syncBackupNum'] = $syncBackupNum;
        return $this;
    }

    /**
    * Gets deleteBackupNum
    *  删除的备份副本数
    *
    * @return int|null
    */
    public function getDeleteBackupNum()
    {
        return $this->container['deleteBackupNum'];
    }

    /**
    * Sets deleteBackupNum
    *
    * @param int|null $deleteBackupNum 删除的备份副本数
    *
    * @return $this
    */
    public function setDeleteBackupNum($deleteBackupNum)
    {
        $this->container['deleteBackupNum'] = $deleteBackupNum;
        return $this;
    }

    /**
    * Gets errSyncBackupNum
    *  同步失败备副本数
    *
    * @return int|null
    */
    public function getErrSyncBackupNum()
    {
        return $this->container['errSyncBackupNum'];
    }

    /**
    * Sets errSyncBackupNum
    *
    * @param int|null $errSyncBackupNum 同步失败备副本数
    *
    * @return $this
    */
    public function setErrSyncBackupNum($errSyncBackupNum)
    {
        $this->container['errSyncBackupNum'] = $errSyncBackupNum;
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

