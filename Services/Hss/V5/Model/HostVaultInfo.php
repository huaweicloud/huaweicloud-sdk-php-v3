<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HostVaultInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HostVaultInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  **参数解释**: 主机id **取值范围**: 字符长度1-128位
    * hostName  **参数解释**: 主机名称 **取值范围**: 字符长度1-256位
    * publicIp  **参数解释**: 主机公网ip **取值范围**: 字符长度1-128位
    * privateIp  **参数解释**: 主机私网ip **取值范围**: 字符长度1-128位
    * assetValue  **参数解释**: 主机的资产重要性 **取值范围**: - important：重要资产 - common：一般资产 - test：测试资产
    * defaultBackupNameSuffix  **参数解释**: 默认备份名称的后缀 **取值范围**: 字符长度0-32位
    * defaultVault  defaultVault
    * vaults  **参数解释**: 主机的存储库列表 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'hostName' => 'string',
            'publicIp' => 'string',
            'privateIp' => 'string',
            'assetValue' => 'string',
            'defaultBackupNameSuffix' => 'string',
            'defaultVault' => '\HuaweiCloud\SDK\Hss\V5\Model\HostVaultInfoDefaultVault',
            'vaults' => '\HuaweiCloud\SDK\Hss\V5\Model\HostVaultInfoVaults[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  **参数解释**: 主机id **取值范围**: 字符长度1-128位
    * hostName  **参数解释**: 主机名称 **取值范围**: 字符长度1-256位
    * publicIp  **参数解释**: 主机公网ip **取值范围**: 字符长度1-128位
    * privateIp  **参数解释**: 主机私网ip **取值范围**: 字符长度1-128位
    * assetValue  **参数解释**: 主机的资产重要性 **取值范围**: - important：重要资产 - common：一般资产 - test：测试资产
    * defaultBackupNameSuffix  **参数解释**: 默认备份名称的后缀 **取值范围**: 字符长度0-32位
    * defaultVault  defaultVault
    * vaults  **参数解释**: 主机的存储库列表 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'hostName' => null,
        'publicIp' => null,
        'privateIp' => null,
        'assetValue' => null,
        'defaultBackupNameSuffix' => null,
        'defaultVault' => null,
        'vaults' => null
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
    * hostId  **参数解释**: 主机id **取值范围**: 字符长度1-128位
    * hostName  **参数解释**: 主机名称 **取值范围**: 字符长度1-256位
    * publicIp  **参数解释**: 主机公网ip **取值范围**: 字符长度1-128位
    * privateIp  **参数解释**: 主机私网ip **取值范围**: 字符长度1-128位
    * assetValue  **参数解释**: 主机的资产重要性 **取值范围**: - important：重要资产 - common：一般资产 - test：测试资产
    * defaultBackupNameSuffix  **参数解释**: 默认备份名称的后缀 **取值范围**: 字符长度0-32位
    * defaultVault  defaultVault
    * vaults  **参数解释**: 主机的存储库列表 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'publicIp' => 'public_ip',
            'privateIp' => 'private_ip',
            'assetValue' => 'asset_value',
            'defaultBackupNameSuffix' => 'default_backup_name_suffix',
            'defaultVault' => 'default_vault',
            'vaults' => 'vaults'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  **参数解释**: 主机id **取值范围**: 字符长度1-128位
    * hostName  **参数解释**: 主机名称 **取值范围**: 字符长度1-256位
    * publicIp  **参数解释**: 主机公网ip **取值范围**: 字符长度1-128位
    * privateIp  **参数解释**: 主机私网ip **取值范围**: 字符长度1-128位
    * assetValue  **参数解释**: 主机的资产重要性 **取值范围**: - important：重要资产 - common：一般资产 - test：测试资产
    * defaultBackupNameSuffix  **参数解释**: 默认备份名称的后缀 **取值范围**: 字符长度0-32位
    * defaultVault  defaultVault
    * vaults  **参数解释**: 主机的存储库列表 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'publicIp' => 'setPublicIp',
            'privateIp' => 'setPrivateIp',
            'assetValue' => 'setAssetValue',
            'defaultBackupNameSuffix' => 'setDefaultBackupNameSuffix',
            'defaultVault' => 'setDefaultVault',
            'vaults' => 'setVaults'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  **参数解释**: 主机id **取值范围**: 字符长度1-128位
    * hostName  **参数解释**: 主机名称 **取值范围**: 字符长度1-256位
    * publicIp  **参数解释**: 主机公网ip **取值范围**: 字符长度1-128位
    * privateIp  **参数解释**: 主机私网ip **取值范围**: 字符长度1-128位
    * assetValue  **参数解释**: 主机的资产重要性 **取值范围**: - important：重要资产 - common：一般资产 - test：测试资产
    * defaultBackupNameSuffix  **参数解释**: 默认备份名称的后缀 **取值范围**: 字符长度0-32位
    * defaultVault  defaultVault
    * vaults  **参数解释**: 主机的存储库列表 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'publicIp' => 'getPublicIp',
            'privateIp' => 'getPrivateIp',
            'assetValue' => 'getAssetValue',
            'defaultBackupNameSuffix' => 'getDefaultBackupNameSuffix',
            'defaultVault' => 'getDefaultVault',
            'vaults' => 'getVaults'
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['defaultBackupNameSuffix'] = isset($data['defaultBackupNameSuffix']) ? $data['defaultBackupNameSuffix'] : null;
        $this->container['defaultVault'] = isset($data['defaultVault']) ? $data['defaultVault'] : null;
        $this->container['vaults'] = isset($data['vaults']) ? $data['vaults'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) > 32)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['defaultBackupNameSuffix']) && (mb_strlen($this->container['defaultBackupNameSuffix']) > 32)) {
                $invalidProperties[] = "invalid value for 'defaultBackupNameSuffix', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['defaultBackupNameSuffix']) && (mb_strlen($this->container['defaultBackupNameSuffix']) < 0)) {
                $invalidProperties[] = "invalid value for 'defaultBackupNameSuffix', the character length must be bigger than or equal to 0.";
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
    * Gets hostId
    *  **参数解释**: 主机id **取值范围**: 字符长度1-128位
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId **参数解释**: 主机id **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**: 主机名称 **取值范围**: 字符长度1-256位
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName **参数解释**: 主机名称 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets publicIp
    *  **参数解释**: 主机公网ip **取值范围**: 字符长度1-128位
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp **参数解释**: 主机公网ip **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**: 主机私网ip **取值范围**: 字符长度1-128位
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp **参数解释**: 主机私网ip **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets assetValue
    *  **参数解释**: 主机的资产重要性 **取值范围**: - important：重要资产 - common：一般资产 - test：测试资产
    *
    * @return string|null
    */
    public function getAssetValue()
    {
        return $this->container['assetValue'];
    }

    /**
    * Sets assetValue
    *
    * @param string|null $assetValue **参数解释**: 主机的资产重要性 **取值范围**: - important：重要资产 - common：一般资产 - test：测试资产
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
        return $this;
    }

    /**
    * Gets defaultBackupNameSuffix
    *  **参数解释**: 默认备份名称的后缀 **取值范围**: 字符长度0-32位
    *
    * @return string|null
    */
    public function getDefaultBackupNameSuffix()
    {
        return $this->container['defaultBackupNameSuffix'];
    }

    /**
    * Sets defaultBackupNameSuffix
    *
    * @param string|null $defaultBackupNameSuffix **参数解释**: 默认备份名称的后缀 **取值范围**: 字符长度0-32位
    *
    * @return $this
    */
    public function setDefaultBackupNameSuffix($defaultBackupNameSuffix)
    {
        $this->container['defaultBackupNameSuffix'] = $defaultBackupNameSuffix;
        return $this;
    }

    /**
    * Gets defaultVault
    *  defaultVault
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\HostVaultInfoDefaultVault|null
    */
    public function getDefaultVault()
    {
        return $this->container['defaultVault'];
    }

    /**
    * Sets defaultVault
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\HostVaultInfoDefaultVault|null $defaultVault defaultVault
    *
    * @return $this
    */
    public function setDefaultVault($defaultVault)
    {
        $this->container['defaultVault'] = $defaultVault;
        return $this;
    }

    /**
    * Gets vaults
    *  **参数解释**: 主机的存储库列表 **取值范围**: 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\HostVaultInfoVaults[]|null
    */
    public function getVaults()
    {
        return $this->container['vaults'];
    }

    /**
    * Sets vaults
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\HostVaultInfoVaults[]|null $vaults **参数解释**: 主机的存储库列表 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setVaults($vaults)
    {
        $this->container['vaults'] = $vaults;
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

