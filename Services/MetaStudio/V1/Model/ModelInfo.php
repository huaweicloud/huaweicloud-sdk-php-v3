<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModelInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModelInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * modelAssetId  模型资产ID，可以从资产库中查询。
    * assetName  资产名称
    * backupModelAssetIds  主播轮换时备选主播数字人资产ID（仅形象资产，不包含音色），可以从资产库中查询。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'modelAssetId' => 'string',
            'assetName' => 'string',
            'backupModelAssetIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * modelAssetId  模型资产ID，可以从资产库中查询。
    * assetName  资产名称
    * backupModelAssetIds  主播轮换时备选主播数字人资产ID（仅形象资产，不包含音色），可以从资产库中查询。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'modelAssetId' => null,
        'assetName' => null,
        'backupModelAssetIds' => null
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
    * modelAssetId  模型资产ID，可以从资产库中查询。
    * assetName  资产名称
    * backupModelAssetIds  主播轮换时备选主播数字人资产ID（仅形象资产，不包含音色），可以从资产库中查询。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'modelAssetId' => 'model_asset_id',
            'assetName' => 'asset_name',
            'backupModelAssetIds' => 'backup_model_asset_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * modelAssetId  模型资产ID，可以从资产库中查询。
    * assetName  资产名称
    * backupModelAssetIds  主播轮换时备选主播数字人资产ID（仅形象资产，不包含音色），可以从资产库中查询。
    *
    * @var string[]
    */
    protected static $setters = [
            'modelAssetId' => 'setModelAssetId',
            'assetName' => 'setAssetName',
            'backupModelAssetIds' => 'setBackupModelAssetIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * modelAssetId  模型资产ID，可以从资产库中查询。
    * assetName  资产名称
    * backupModelAssetIds  主播轮换时备选主播数字人资产ID（仅形象资产，不包含音色），可以从资产库中查询。
    *
    * @var string[]
    */
    protected static $getters = [
            'modelAssetId' => 'getModelAssetId',
            'assetName' => 'getAssetName',
            'backupModelAssetIds' => 'getBackupModelAssetIds'
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
        $this->container['modelAssetId'] = isset($data['modelAssetId']) ? $data['modelAssetId'] : null;
        $this->container['assetName'] = isset($data['assetName']) ? $data['assetName'] : null;
        $this->container['backupModelAssetIds'] = isset($data['backupModelAssetIds']) ? $data['backupModelAssetIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['modelAssetId']) && (mb_strlen($this->container['modelAssetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'modelAssetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modelAssetId']) && (mb_strlen($this->container['modelAssetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'modelAssetId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetName']) && (mb_strlen($this->container['assetName']) > 256)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['assetName']) && (mb_strlen($this->container['assetName']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be bigger than or equal to 0.";
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
    * Gets modelAssetId
    *  模型资产ID，可以从资产库中查询。
    *
    * @return string|null
    */
    public function getModelAssetId()
    {
        return $this->container['modelAssetId'];
    }

    /**
    * Sets modelAssetId
    *
    * @param string|null $modelAssetId 模型资产ID，可以从资产库中查询。
    *
    * @return $this
    */
    public function setModelAssetId($modelAssetId)
    {
        $this->container['modelAssetId'] = $modelAssetId;
        return $this;
    }

    /**
    * Gets assetName
    *  资产名称
    *
    * @return string|null
    */
    public function getAssetName()
    {
        return $this->container['assetName'];
    }

    /**
    * Sets assetName
    *
    * @param string|null $assetName 资产名称
    *
    * @return $this
    */
    public function setAssetName($assetName)
    {
        $this->container['assetName'] = $assetName;
        return $this;
    }

    /**
    * Gets backupModelAssetIds
    *  主播轮换时备选主播数字人资产ID（仅形象资产，不包含音色），可以从资产库中查询。
    *
    * @return string[]|null
    */
    public function getBackupModelAssetIds()
    {
        return $this->container['backupModelAssetIds'];
    }

    /**
    * Sets backupModelAssetIds
    *
    * @param string[]|null $backupModelAssetIds 主播轮换时备选主播数字人资产ID（仅形象资产，不包含音色），可以从资产库中查询。
    *
    * @return $this
    */
    public function setBackupModelAssetIds($backupModelAssetIds)
    {
        $this->container['backupModelAssetIds'] = $backupModelAssetIds;
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

