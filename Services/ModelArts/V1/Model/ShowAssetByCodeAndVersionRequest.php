<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAssetByCodeAndVersionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAssetByCodeAndVersionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetCode  **参数解释**：资产code。 **约束限制**：1-60字符，英文字母，数字，中划线，下划线，点。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetVersion  **参数解释**：资产version。 **约束限制**：数字或为格式x.y.z， x,y,z均为数字。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * assetType  **参数解释**:资产类型。 **约束限制**:不涉及。 **取值范围**:不涉及。 **默认取值**:MODEL。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetCode' => 'string',
            'assetVersion' => 'string',
            'workspaceId' => 'string',
            'assetType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetCode  **参数解释**：资产code。 **约束限制**：1-60字符，英文字母，数字，中划线，下划线，点。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetVersion  **参数解释**：资产version。 **约束限制**：数字或为格式x.y.z， x,y,z均为数字。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * assetType  **参数解释**:资产类型。 **约束限制**:不涉及。 **取值范围**:不涉及。 **默认取值**:MODEL。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetCode' => null,
        'assetVersion' => null,
        'workspaceId' => null,
        'assetType' => null
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
    * assetCode  **参数解释**：资产code。 **约束限制**：1-60字符，英文字母，数字，中划线，下划线，点。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetVersion  **参数解释**：资产version。 **约束限制**：数字或为格式x.y.z， x,y,z均为数字。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * assetType  **参数解释**:资产类型。 **约束限制**:不涉及。 **取值范围**:不涉及。 **默认取值**:MODEL。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetCode' => 'asset_code',
            'assetVersion' => 'asset_version',
            'workspaceId' => 'workspace_id',
            'assetType' => 'asset_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetCode  **参数解释**：资产code。 **约束限制**：1-60字符，英文字母，数字，中划线，下划线，点。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetVersion  **参数解释**：资产version。 **约束限制**：数字或为格式x.y.z， x,y,z均为数字。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * assetType  **参数解释**:资产类型。 **约束限制**:不涉及。 **取值范围**:不涉及。 **默认取值**:MODEL。
    *
    * @var string[]
    */
    protected static $setters = [
            'assetCode' => 'setAssetCode',
            'assetVersion' => 'setAssetVersion',
            'workspaceId' => 'setWorkspaceId',
            'assetType' => 'setAssetType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetCode  **参数解释**：资产code。 **约束限制**：1-60字符，英文字母，数字，中划线，下划线，点。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetVersion  **参数解释**：资产version。 **约束限制**：数字或为格式x.y.z， x,y,z均为数字。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * assetType  **参数解释**:资产类型。 **约束限制**:不涉及。 **取值范围**:不涉及。 **默认取值**:MODEL。
    *
    * @var string[]
    */
    protected static $getters = [
            'assetCode' => 'getAssetCode',
            'assetVersion' => 'getAssetVersion',
            'workspaceId' => 'getWorkspaceId',
            'assetType' => 'getAssetType'
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
        $this->container['assetCode'] = isset($data['assetCode']) ? $data['assetCode'] : null;
        $this->container['assetVersion'] = isset($data['assetVersion']) ? $data['assetVersion'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['assetType'] = isset($data['assetType']) ? $data['assetType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['assetCode'] === null) {
            $invalidProperties[] = "'assetCode' can't be null";
        }
            if ((mb_strlen($this->container['assetCode']) > 60)) {
                $invalidProperties[] = "invalid value for 'assetCode', the character length must be smaller than or equal to 60.";
            }
            if ((mb_strlen($this->container['assetCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetCode', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9-_.]{1,60}$/", $this->container['assetCode'])) {
                $invalidProperties[] = "invalid value for 'assetCode', must be conform to the pattern /^[a-zA-Z0-9-_.]{1,60}$/.";
            }
        if ($this->container['assetVersion'] === null) {
            $invalidProperties[] = "'assetVersion' can't be null";
        }
            if ((mb_strlen($this->container['assetVersion']) > 100)) {
                $invalidProperties[] = "invalid value for 'assetVersion', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['assetVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetVersion', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^(\\d+(\\.\\d+){2}|\\d+)$/", $this->container['assetVersion'])) {
                $invalidProperties[] = "invalid value for 'assetVersion', must be conform to the pattern /^(\\d+(\\.\\d+){2}|\\d+)$/.";
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
    * Gets assetCode
    *  **参数解释**：资产code。 **约束限制**：1-60字符，英文字母，数字，中划线，下划线，点。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getAssetCode()
    {
        return $this->container['assetCode'];
    }

    /**
    * Sets assetCode
    *
    * @param string $assetCode **参数解释**：资产code。 **约束限制**：1-60字符，英文字母，数字，中划线，下划线，点。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAssetCode($assetCode)
    {
        $this->container['assetCode'] = $assetCode;
        return $this;
    }

    /**
    * Gets assetVersion
    *  **参数解释**：资产version。 **约束限制**：数字或为格式x.y.z， x,y,z均为数字。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getAssetVersion()
    {
        return $this->container['assetVersion'];
    }

    /**
    * Sets assetVersion
    *
    * @param string $assetVersion **参数解释**：资产version。 **约束限制**：数字或为格式x.y.z， x,y,z均为数字。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAssetVersion($assetVersion)
    {
        $this->container['assetVersion'] = $assetVersion;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets assetType
    *  **参数解释**:资产类型。 **约束限制**:不涉及。 **取值范围**:不涉及。 **默认取值**:MODEL。
    *
    * @return string|null
    */
    public function getAssetType()
    {
        return $this->container['assetType'];
    }

    /**
    * Sets assetType
    *
    * @param string|null $assetType **参数解释**:资产类型。 **约束限制**:不涉及。 **取值范围**:不涉及。 **默认取值**:MODEL。
    *
    * @return $this
    */
    public function setAssetType($assetType)
    {
        $this->container['assetType'] = $assetType;
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

