<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListExternalVaultRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListExternalVaultRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * externalProjectId  其他区域的项目ID
    * limit  每页显示条目数
    * offset  偏移值
    * protectType  [保护类型。取值为backup，replication和hybrid。](tag:hws,hws_hk) [保护类型。取值为backup和replication。](tag:ocb) [保护类型。取值为backup。](tag:g42,hk-g42,sbc,dt,fcs_vm,ctc,tm,tlf,cmcc,hcso_dt)
    * regionId  区域ID
    * objcetType  资源类型
    * cloudType  [云类型。取值为public和hybrid。](tag:hws,hws_hk) [云类型。取值为public。](tag:g42,hk-g42,sbc,dt,fcs_vm,ctc,ocb,tm,tlf,cmcc,hcso_dt)
    * vaultId  存储库ID，指定存储ID时其他过滤条件不生效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'externalProjectId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'protectType' => 'string',
            'regionId' => 'string',
            'objcetType' => 'string',
            'cloudType' => 'string',
            'vaultId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * externalProjectId  其他区域的项目ID
    * limit  每页显示条目数
    * offset  偏移值
    * protectType  [保护类型。取值为backup，replication和hybrid。](tag:hws,hws_hk) [保护类型。取值为backup和replication。](tag:ocb) [保护类型。取值为backup。](tag:g42,hk-g42,sbc,dt,fcs_vm,ctc,tm,tlf,cmcc,hcso_dt)
    * regionId  区域ID
    * objcetType  资源类型
    * cloudType  [云类型。取值为public和hybrid。](tag:hws,hws_hk) [云类型。取值为public。](tag:g42,hk-g42,sbc,dt,fcs_vm,ctc,ocb,tm,tlf,cmcc,hcso_dt)
    * vaultId  存储库ID，指定存储ID时其他过滤条件不生效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'externalProjectId' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'protectType' => null,
        'regionId' => null,
        'objcetType' => null,
        'cloudType' => null,
        'vaultId' => null
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
    * externalProjectId  其他区域的项目ID
    * limit  每页显示条目数
    * offset  偏移值
    * protectType  [保护类型。取值为backup，replication和hybrid。](tag:hws,hws_hk) [保护类型。取值为backup和replication。](tag:ocb) [保护类型。取值为backup。](tag:g42,hk-g42,sbc,dt,fcs_vm,ctc,tm,tlf,cmcc,hcso_dt)
    * regionId  区域ID
    * objcetType  资源类型
    * cloudType  [云类型。取值为public和hybrid。](tag:hws,hws_hk) [云类型。取值为public。](tag:g42,hk-g42,sbc,dt,fcs_vm,ctc,ocb,tm,tlf,cmcc,hcso_dt)
    * vaultId  存储库ID，指定存储ID时其他过滤条件不生效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'externalProjectId' => 'external_project_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'protectType' => 'protect_type',
            'regionId' => 'region_id',
            'objcetType' => 'objcet_type',
            'cloudType' => 'cloud_type',
            'vaultId' => 'vault_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * externalProjectId  其他区域的项目ID
    * limit  每页显示条目数
    * offset  偏移值
    * protectType  [保护类型。取值为backup，replication和hybrid。](tag:hws,hws_hk) [保护类型。取值为backup和replication。](tag:ocb) [保护类型。取值为backup。](tag:g42,hk-g42,sbc,dt,fcs_vm,ctc,tm,tlf,cmcc,hcso_dt)
    * regionId  区域ID
    * objcetType  资源类型
    * cloudType  [云类型。取值为public和hybrid。](tag:hws,hws_hk) [云类型。取值为public。](tag:g42,hk-g42,sbc,dt,fcs_vm,ctc,ocb,tm,tlf,cmcc,hcso_dt)
    * vaultId  存储库ID，指定存储ID时其他过滤条件不生效。
    *
    * @var string[]
    */
    protected static $setters = [
            'externalProjectId' => 'setExternalProjectId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'protectType' => 'setProtectType',
            'regionId' => 'setRegionId',
            'objcetType' => 'setObjcetType',
            'cloudType' => 'setCloudType',
            'vaultId' => 'setVaultId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * externalProjectId  其他区域的项目ID
    * limit  每页显示条目数
    * offset  偏移值
    * protectType  [保护类型。取值为backup，replication和hybrid。](tag:hws,hws_hk) [保护类型。取值为backup和replication。](tag:ocb) [保护类型。取值为backup。](tag:g42,hk-g42,sbc,dt,fcs_vm,ctc,tm,tlf,cmcc,hcso_dt)
    * regionId  区域ID
    * objcetType  资源类型
    * cloudType  [云类型。取值为public和hybrid。](tag:hws,hws_hk) [云类型。取值为public。](tag:g42,hk-g42,sbc,dt,fcs_vm,ctc,ocb,tm,tlf,cmcc,hcso_dt)
    * vaultId  存储库ID，指定存储ID时其他过滤条件不生效。
    *
    * @var string[]
    */
    protected static $getters = [
            'externalProjectId' => 'getExternalProjectId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'protectType' => 'getProtectType',
            'regionId' => 'getRegionId',
            'objcetType' => 'getObjcetType',
            'cloudType' => 'getCloudType',
            'vaultId' => 'getVaultId'
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
    const PROTECT_TYPE_BACKUPREPLICATIONHYBRID = 'backup;replication;hybrid';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtectTypeAllowableValues()
    {
        return [
            self::PROTECT_TYPE_BACKUPREPLICATIONHYBRID,
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
        $this->container['externalProjectId'] = isset($data['externalProjectId']) ? $data['externalProjectId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['protectType'] = isset($data['protectType']) ? $data['protectType'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['objcetType'] = isset($data['objcetType']) ? $data['objcetType'] : null;
        $this->container['cloudType'] = isset($data['cloudType']) ? $data['cloudType'] : null;
        $this->container['vaultId'] = isset($data['vaultId']) ? $data['vaultId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['externalProjectId'] === null) {
            $invalidProperties[] = "'externalProjectId' can't be null";
        }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getProtectTypeAllowableValues();
                if (!is_null($this->container['protectType']) && !in_array($this->container['protectType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protectType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
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
    * Gets externalProjectId
    *  其他区域的项目ID
    *
    * @return string
    */
    public function getExternalProjectId()
    {
        return $this->container['externalProjectId'];
    }

    /**
    * Sets externalProjectId
    *
    * @param string $externalProjectId 其他区域的项目ID
    *
    * @return $this
    */
    public function setExternalProjectId($externalProjectId)
    {
        $this->container['externalProjectId'] = $externalProjectId;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示条目数
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页显示条目数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  偏移值
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移值
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets protectType
    *  [保护类型。取值为backup，replication和hybrid。](tag:hws,hws_hk) [保护类型。取值为backup和replication。](tag:ocb) [保护类型。取值为backup。](tag:g42,hk-g42,sbc,dt,fcs_vm,ctc,tm,tlf,cmcc,hcso_dt)
    *
    * @return string|null
    */
    public function getProtectType()
    {
        return $this->container['protectType'];
    }

    /**
    * Sets protectType
    *
    * @param string|null $protectType [保护类型。取值为backup，replication和hybrid。](tag:hws,hws_hk) [保护类型。取值为backup和replication。](tag:ocb) [保护类型。取值为backup。](tag:g42,hk-g42,sbc,dt,fcs_vm,ctc,tm,tlf,cmcc,hcso_dt)
    *
    * @return $this
    */
    public function setProtectType($protectType)
    {
        $this->container['protectType'] = $protectType;
        return $this;
    }

    /**
    * Gets regionId
    *  区域ID
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
    * @param string $regionId 区域ID
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets objcetType
    *  资源类型
    *
    * @return string|null
    */
    public function getObjcetType()
    {
        return $this->container['objcetType'];
    }

    /**
    * Sets objcetType
    *
    * @param string|null $objcetType 资源类型
    *
    * @return $this
    */
    public function setObjcetType($objcetType)
    {
        $this->container['objcetType'] = $objcetType;
        return $this;
    }

    /**
    * Gets cloudType
    *  [云类型。取值为public和hybrid。](tag:hws,hws_hk) [云类型。取值为public。](tag:g42,hk-g42,sbc,dt,fcs_vm,ctc,ocb,tm,tlf,cmcc,hcso_dt)
    *
    * @return string|null
    */
    public function getCloudType()
    {
        return $this->container['cloudType'];
    }

    /**
    * Sets cloudType
    *
    * @param string|null $cloudType [云类型。取值为public和hybrid。](tag:hws,hws_hk) [云类型。取值为public。](tag:g42,hk-g42,sbc,dt,fcs_vm,ctc,ocb,tm,tlf,cmcc,hcso_dt)
    *
    * @return $this
    */
    public function setCloudType($cloudType)
    {
        $this->container['cloudType'] = $cloudType;
        return $this;
    }

    /**
    * Gets vaultId
    *  存储库ID，指定存储ID时其他过滤条件不生效。
    *
    * @return string|null
    */
    public function getVaultId()
    {
        return $this->container['vaultId'];
    }

    /**
    * Sets vaultId
    *
    * @param string|null $vaultId 存储库ID，指定存储ID时其他过滤条件不生效。
    *
    * @return $this
    */
    public function setVaultId($vaultId)
    {
        $this->container['vaultId'] = $vaultId;
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

