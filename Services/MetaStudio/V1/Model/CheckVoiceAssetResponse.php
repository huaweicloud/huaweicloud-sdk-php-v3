<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckVoiceAssetResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckVoiceAssetResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetId  资产ID。
    * assetName  资产名称。
    * assetType  资产类型。  公共资产类型： * VOICE_MODEL：音色模型
    * assetState  资产状态。 * CREATING：资产创建中，主文件尚未上传 * FAILED：主文件上传失败 * UNACTIVED：主文件上传成功，资产未激活，资产不可用于其他业务（用户可更新状态） * ACTIVED：主文件上传成功，资产激活，资产可用于其他业务（用户可更新状态） * DELETING：资产删除中，资产不可用，资产可恢复 * DELETED：资产文件已删除，资产不可用，资产不可恢复 * BLOCK: 资产被冻结，资产不可用，不可查看文件。
    * createTime  资产创建时间。
    * updateTime  资产更新时间。
    * assetExtraMeta  assetExtraMeta
    * files  资产下的文件。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetId' => 'string',
            'assetName' => 'string',
            'assetType' => 'string',
            'assetState' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'assetExtraMeta' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\TtscAssetExtraMeta',
            'files' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\TtscAssetFileInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetId  资产ID。
    * assetName  资产名称。
    * assetType  资产类型。  公共资产类型： * VOICE_MODEL：音色模型
    * assetState  资产状态。 * CREATING：资产创建中，主文件尚未上传 * FAILED：主文件上传失败 * UNACTIVED：主文件上传成功，资产未激活，资产不可用于其他业务（用户可更新状态） * ACTIVED：主文件上传成功，资产激活，资产可用于其他业务（用户可更新状态） * DELETING：资产删除中，资产不可用，资产可恢复 * DELETED：资产文件已删除，资产不可用，资产不可恢复 * BLOCK: 资产被冻结，资产不可用，不可查看文件。
    * createTime  资产创建时间。
    * updateTime  资产更新时间。
    * assetExtraMeta  assetExtraMeta
    * files  资产下的文件。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetId' => null,
        'assetName' => null,
        'assetType' => null,
        'assetState' => null,
        'createTime' => null,
        'updateTime' => null,
        'assetExtraMeta' => null,
        'files' => null
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
    * assetId  资产ID。
    * assetName  资产名称。
    * assetType  资产类型。  公共资产类型： * VOICE_MODEL：音色模型
    * assetState  资产状态。 * CREATING：资产创建中，主文件尚未上传 * FAILED：主文件上传失败 * UNACTIVED：主文件上传成功，资产未激活，资产不可用于其他业务（用户可更新状态） * ACTIVED：主文件上传成功，资产激活，资产可用于其他业务（用户可更新状态） * DELETING：资产删除中，资产不可用，资产可恢复 * DELETED：资产文件已删除，资产不可用，资产不可恢复 * BLOCK: 资产被冻结，资产不可用，不可查看文件。
    * createTime  资产创建时间。
    * updateTime  资产更新时间。
    * assetExtraMeta  assetExtraMeta
    * files  资产下的文件。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetId' => 'asset_id',
            'assetName' => 'asset_name',
            'assetType' => 'asset_type',
            'assetState' => 'asset_state',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'assetExtraMeta' => 'asset_extra_meta',
            'files' => 'files'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetId  资产ID。
    * assetName  资产名称。
    * assetType  资产类型。  公共资产类型： * VOICE_MODEL：音色模型
    * assetState  资产状态。 * CREATING：资产创建中，主文件尚未上传 * FAILED：主文件上传失败 * UNACTIVED：主文件上传成功，资产未激活，资产不可用于其他业务（用户可更新状态） * ACTIVED：主文件上传成功，资产激活，资产可用于其他业务（用户可更新状态） * DELETING：资产删除中，资产不可用，资产可恢复 * DELETED：资产文件已删除，资产不可用，资产不可恢复 * BLOCK: 资产被冻结，资产不可用，不可查看文件。
    * createTime  资产创建时间。
    * updateTime  资产更新时间。
    * assetExtraMeta  assetExtraMeta
    * files  资产下的文件。
    *
    * @var string[]
    */
    protected static $setters = [
            'assetId' => 'setAssetId',
            'assetName' => 'setAssetName',
            'assetType' => 'setAssetType',
            'assetState' => 'setAssetState',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'assetExtraMeta' => 'setAssetExtraMeta',
            'files' => 'setFiles'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetId  资产ID。
    * assetName  资产名称。
    * assetType  资产类型。  公共资产类型： * VOICE_MODEL：音色模型
    * assetState  资产状态。 * CREATING：资产创建中，主文件尚未上传 * FAILED：主文件上传失败 * UNACTIVED：主文件上传成功，资产未激活，资产不可用于其他业务（用户可更新状态） * ACTIVED：主文件上传成功，资产激活，资产可用于其他业务（用户可更新状态） * DELETING：资产删除中，资产不可用，资产可恢复 * DELETED：资产文件已删除，资产不可用，资产不可恢复 * BLOCK: 资产被冻结，资产不可用，不可查看文件。
    * createTime  资产创建时间。
    * updateTime  资产更新时间。
    * assetExtraMeta  assetExtraMeta
    * files  资产下的文件。
    *
    * @var string[]
    */
    protected static $getters = [
            'assetId' => 'getAssetId',
            'assetName' => 'getAssetName',
            'assetType' => 'getAssetType',
            'assetState' => 'getAssetState',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'assetExtraMeta' => 'getAssetExtraMeta',
            'files' => 'getFiles'
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
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['assetName'] = isset($data['assetName']) ? $data['assetName'] : null;
        $this->container['assetType'] = isset($data['assetType']) ? $data['assetType'] : null;
        $this->container['assetState'] = isset($data['assetState']) ? $data['assetState'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['assetExtraMeta'] = isset($data['assetExtraMeta']) ? $data['assetExtraMeta'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) > 256)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetName']) && (mb_strlen($this->container['assetName']) > 256)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['assetName']) && (mb_strlen($this->container['assetName']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetType']) && (mb_strlen($this->container['assetType']) > 32)) {
                $invalidProperties[] = "invalid value for 'assetType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['assetType']) && (mb_strlen($this->container['assetType']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetState']) && (mb_strlen($this->container['assetState']) > 32)) {
                $invalidProperties[] = "invalid value for 'assetState', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['assetState']) && (mb_strlen($this->container['assetState']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetState', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 20.";
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
    * Gets assetId
    *  资产ID。
    *
    * @return string|null
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string|null $assetId 资产ID。
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets assetName
    *  资产名称。
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
    * @param string|null $assetName 资产名称。
    *
    * @return $this
    */
    public function setAssetName($assetName)
    {
        $this->container['assetName'] = $assetName;
        return $this;
    }

    /**
    * Gets assetType
    *  资产类型。  公共资产类型： * VOICE_MODEL：音色模型
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
    * @param string|null $assetType 资产类型。  公共资产类型： * VOICE_MODEL：音色模型
    *
    * @return $this
    */
    public function setAssetType($assetType)
    {
        $this->container['assetType'] = $assetType;
        return $this;
    }

    /**
    * Gets assetState
    *  资产状态。 * CREATING：资产创建中，主文件尚未上传 * FAILED：主文件上传失败 * UNACTIVED：主文件上传成功，资产未激活，资产不可用于其他业务（用户可更新状态） * ACTIVED：主文件上传成功，资产激活，资产可用于其他业务（用户可更新状态） * DELETING：资产删除中，资产不可用，资产可恢复 * DELETED：资产文件已删除，资产不可用，资产不可恢复 * BLOCK: 资产被冻结，资产不可用，不可查看文件。
    *
    * @return string|null
    */
    public function getAssetState()
    {
        return $this->container['assetState'];
    }

    /**
    * Sets assetState
    *
    * @param string|null $assetState 资产状态。 * CREATING：资产创建中，主文件尚未上传 * FAILED：主文件上传失败 * UNACTIVED：主文件上传成功，资产未激活，资产不可用于其他业务（用户可更新状态） * ACTIVED：主文件上传成功，资产激活，资产可用于其他业务（用户可更新状态） * DELETING：资产删除中，资产不可用，资产可恢复 * DELETED：资产文件已删除，资产不可用，资产不可恢复 * BLOCK: 资产被冻结，资产不可用，不可查看文件。
    *
    * @return $this
    */
    public function setAssetState($assetState)
    {
        $this->container['assetState'] = $assetState;
        return $this;
    }

    /**
    * Gets createTime
    *  资产创建时间。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 资产创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  资产更新时间。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 资产更新时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets assetExtraMeta
    *  assetExtraMeta
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\TtscAssetExtraMeta|null
    */
    public function getAssetExtraMeta()
    {
        return $this->container['assetExtraMeta'];
    }

    /**
    * Sets assetExtraMeta
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\TtscAssetExtraMeta|null $assetExtraMeta assetExtraMeta
    *
    * @return $this
    */
    public function setAssetExtraMeta($assetExtraMeta)
    {
        $this->container['assetExtraMeta'] = $assetExtraMeta;
        return $this;
    }

    /**
    * Gets files
    *  资产下的文件。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\TtscAssetFileInfo[]|null
    */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
    * Sets files
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\TtscAssetFileInfo[]|null $files 资产下的文件。
    *
    * @return $this
    */
    public function setFiles($files)
    {
        $this->container['files'] = $files;
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

