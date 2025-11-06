<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRemoteMirrorResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRemoteMirrorResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 仓库镜像配置ID。
    * repositoryId  **参数解释：** 仓库ID。
    * updateStatus  **参数解释：** 同步状态。
    * lastUpdateAt  **参数解释：** 最近修改时间。
    * url  **参数解释：** 镜像地址。
    * lastSuccessfulUpdateAt  **参数解释：** 最近同步成功时间。
    * numberOfFailures  **参数解释：** 同步失败次数。
    * mirroringEnabled  **参数解释：** 开启定时同步。
    * isPrivate  **参数解释：** 私有镜像。
    * endpointUuid  **参数解释：** 拓展点uuid。
    * lastError  **参数解释：** 最近失败信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'repositoryId' => 'int',
            'updateStatus' => 'string',
            'lastUpdateAt' => 'string',
            'url' => 'string',
            'lastSuccessfulUpdateAt' => 'string',
            'numberOfFailures' => 'int',
            'mirroringEnabled' => 'bool',
            'isPrivate' => 'bool',
            'endpointUuid' => 'string',
            'lastError' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 仓库镜像配置ID。
    * repositoryId  **参数解释：** 仓库ID。
    * updateStatus  **参数解释：** 同步状态。
    * lastUpdateAt  **参数解释：** 最近修改时间。
    * url  **参数解释：** 镜像地址。
    * lastSuccessfulUpdateAt  **参数解释：** 最近同步成功时间。
    * numberOfFailures  **参数解释：** 同步失败次数。
    * mirroringEnabled  **参数解释：** 开启定时同步。
    * isPrivate  **参数解释：** 私有镜像。
    * endpointUuid  **参数解释：** 拓展点uuid。
    * lastError  **参数解释：** 最近失败信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'repositoryId' => null,
        'updateStatus' => null,
        'lastUpdateAt' => null,
        'url' => null,
        'lastSuccessfulUpdateAt' => null,
        'numberOfFailures' => null,
        'mirroringEnabled' => null,
        'isPrivate' => null,
        'endpointUuid' => null,
        'lastError' => null
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
    * id  **参数解释：** 仓库镜像配置ID。
    * repositoryId  **参数解释：** 仓库ID。
    * updateStatus  **参数解释：** 同步状态。
    * lastUpdateAt  **参数解释：** 最近修改时间。
    * url  **参数解释：** 镜像地址。
    * lastSuccessfulUpdateAt  **参数解释：** 最近同步成功时间。
    * numberOfFailures  **参数解释：** 同步失败次数。
    * mirroringEnabled  **参数解释：** 开启定时同步。
    * isPrivate  **参数解释：** 私有镜像。
    * endpointUuid  **参数解释：** 拓展点uuid。
    * lastError  **参数解释：** 最近失败信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'repositoryId' => 'repository_id',
            'updateStatus' => 'update_status',
            'lastUpdateAt' => 'last_update_at',
            'url' => 'url',
            'lastSuccessfulUpdateAt' => 'last_successful_update_at',
            'numberOfFailures' => 'number_of_failures',
            'mirroringEnabled' => 'mirroring_enabled',
            'isPrivate' => 'is_private',
            'endpointUuid' => 'endpoint_uuid',
            'lastError' => 'last_error'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 仓库镜像配置ID。
    * repositoryId  **参数解释：** 仓库ID。
    * updateStatus  **参数解释：** 同步状态。
    * lastUpdateAt  **参数解释：** 最近修改时间。
    * url  **参数解释：** 镜像地址。
    * lastSuccessfulUpdateAt  **参数解释：** 最近同步成功时间。
    * numberOfFailures  **参数解释：** 同步失败次数。
    * mirroringEnabled  **参数解释：** 开启定时同步。
    * isPrivate  **参数解释：** 私有镜像。
    * endpointUuid  **参数解释：** 拓展点uuid。
    * lastError  **参数解释：** 最近失败信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'repositoryId' => 'setRepositoryId',
            'updateStatus' => 'setUpdateStatus',
            'lastUpdateAt' => 'setLastUpdateAt',
            'url' => 'setUrl',
            'lastSuccessfulUpdateAt' => 'setLastSuccessfulUpdateAt',
            'numberOfFailures' => 'setNumberOfFailures',
            'mirroringEnabled' => 'setMirroringEnabled',
            'isPrivate' => 'setIsPrivate',
            'endpointUuid' => 'setEndpointUuid',
            'lastError' => 'setLastError'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 仓库镜像配置ID。
    * repositoryId  **参数解释：** 仓库ID。
    * updateStatus  **参数解释：** 同步状态。
    * lastUpdateAt  **参数解释：** 最近修改时间。
    * url  **参数解释：** 镜像地址。
    * lastSuccessfulUpdateAt  **参数解释：** 最近同步成功时间。
    * numberOfFailures  **参数解释：** 同步失败次数。
    * mirroringEnabled  **参数解释：** 开启定时同步。
    * isPrivate  **参数解释：** 私有镜像。
    * endpointUuid  **参数解释：** 拓展点uuid。
    * lastError  **参数解释：** 最近失败信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'repositoryId' => 'getRepositoryId',
            'updateStatus' => 'getUpdateStatus',
            'lastUpdateAt' => 'getLastUpdateAt',
            'url' => 'getUrl',
            'lastSuccessfulUpdateAt' => 'getLastSuccessfulUpdateAt',
            'numberOfFailures' => 'getNumberOfFailures',
            'mirroringEnabled' => 'getMirroringEnabled',
            'isPrivate' => 'getIsPrivate',
            'endpointUuid' => 'getEndpointUuid',
            'lastError' => 'getLastError'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['updateStatus'] = isset($data['updateStatus']) ? $data['updateStatus'] : null;
        $this->container['lastUpdateAt'] = isset($data['lastUpdateAt']) ? $data['lastUpdateAt'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['lastSuccessfulUpdateAt'] = isset($data['lastSuccessfulUpdateAt']) ? $data['lastSuccessfulUpdateAt'] : null;
        $this->container['numberOfFailures'] = isset($data['numberOfFailures']) ? $data['numberOfFailures'] : null;
        $this->container['mirroringEnabled'] = isset($data['mirroringEnabled']) ? $data['mirroringEnabled'] : null;
        $this->container['isPrivate'] = isset($data['isPrivate']) ? $data['isPrivate'] : null;
        $this->container['endpointUuid'] = isset($data['endpointUuid']) ? $data['endpointUuid'] : null;
        $this->container['lastError'] = isset($data['lastError']) ? $data['lastError'] : null;
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
    * Gets id
    *  **参数解释：** 仓库镜像配置ID。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释：** 仓库镜像配置ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets repositoryId
    *  **参数解释：** 仓库ID。
    *
    * @return int|null
    */
    public function getRepositoryId()
    {
        return $this->container['repositoryId'];
    }

    /**
    * Sets repositoryId
    *
    * @param int|null $repositoryId **参数解释：** 仓库ID。
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets updateStatus
    *  **参数解释：** 同步状态。
    *
    * @return string|null
    */
    public function getUpdateStatus()
    {
        return $this->container['updateStatus'];
    }

    /**
    * Sets updateStatus
    *
    * @param string|null $updateStatus **参数解释：** 同步状态。
    *
    * @return $this
    */
    public function setUpdateStatus($updateStatus)
    {
        $this->container['updateStatus'] = $updateStatus;
        return $this;
    }

    /**
    * Gets lastUpdateAt
    *  **参数解释：** 最近修改时间。
    *
    * @return string|null
    */
    public function getLastUpdateAt()
    {
        return $this->container['lastUpdateAt'];
    }

    /**
    * Sets lastUpdateAt
    *
    * @param string|null $lastUpdateAt **参数解释：** 最近修改时间。
    *
    * @return $this
    */
    public function setLastUpdateAt($lastUpdateAt)
    {
        $this->container['lastUpdateAt'] = $lastUpdateAt;
        return $this;
    }

    /**
    * Gets url
    *  **参数解释：** 镜像地址。
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url **参数解释：** 镜像地址。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets lastSuccessfulUpdateAt
    *  **参数解释：** 最近同步成功时间。
    *
    * @return string|null
    */
    public function getLastSuccessfulUpdateAt()
    {
        return $this->container['lastSuccessfulUpdateAt'];
    }

    /**
    * Sets lastSuccessfulUpdateAt
    *
    * @param string|null $lastSuccessfulUpdateAt **参数解释：** 最近同步成功时间。
    *
    * @return $this
    */
    public function setLastSuccessfulUpdateAt($lastSuccessfulUpdateAt)
    {
        $this->container['lastSuccessfulUpdateAt'] = $lastSuccessfulUpdateAt;
        return $this;
    }

    /**
    * Gets numberOfFailures
    *  **参数解释：** 同步失败次数。
    *
    * @return int|null
    */
    public function getNumberOfFailures()
    {
        return $this->container['numberOfFailures'];
    }

    /**
    * Sets numberOfFailures
    *
    * @param int|null $numberOfFailures **参数解释：** 同步失败次数。
    *
    * @return $this
    */
    public function setNumberOfFailures($numberOfFailures)
    {
        $this->container['numberOfFailures'] = $numberOfFailures;
        return $this;
    }

    /**
    * Gets mirroringEnabled
    *  **参数解释：** 开启定时同步。
    *
    * @return bool|null
    */
    public function getMirroringEnabled()
    {
        return $this->container['mirroringEnabled'];
    }

    /**
    * Sets mirroringEnabled
    *
    * @param bool|null $mirroringEnabled **参数解释：** 开启定时同步。
    *
    * @return $this
    */
    public function setMirroringEnabled($mirroringEnabled)
    {
        $this->container['mirroringEnabled'] = $mirroringEnabled;
        return $this;
    }

    /**
    * Gets isPrivate
    *  **参数解释：** 私有镜像。
    *
    * @return bool|null
    */
    public function getIsPrivate()
    {
        return $this->container['isPrivate'];
    }

    /**
    * Sets isPrivate
    *
    * @param bool|null $isPrivate **参数解释：** 私有镜像。
    *
    * @return $this
    */
    public function setIsPrivate($isPrivate)
    {
        $this->container['isPrivate'] = $isPrivate;
        return $this;
    }

    /**
    * Gets endpointUuid
    *  **参数解释：** 拓展点uuid。
    *
    * @return string|null
    */
    public function getEndpointUuid()
    {
        return $this->container['endpointUuid'];
    }

    /**
    * Sets endpointUuid
    *
    * @param string|null $endpointUuid **参数解释：** 拓展点uuid。
    *
    * @return $this
    */
    public function setEndpointUuid($endpointUuid)
    {
        $this->container['endpointUuid'] = $endpointUuid;
        return $this;
    }

    /**
    * Gets lastError
    *  **参数解释：** 最近失败信息。
    *
    * @return string|null
    */
    public function getLastError()
    {
        return $this->container['lastError'];
    }

    /**
    * Sets lastError
    *
    * @param string|null $lastError **参数解释：** 最近失败信息。
    *
    * @return $this
    */
    public function setLastError($lastError)
    {
        $this->container['lastError'] = $lastError;
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

