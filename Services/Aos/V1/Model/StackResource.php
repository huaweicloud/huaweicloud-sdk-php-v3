<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StackResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StackResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * physicalResourceId  资源的物理id，由资源提供服务的provider在资源部署的时候生成
    * physicalResourceName  资源的物理名称，资源提供服务在资源部署的时候给予
    * logicalResourceName  资源名，是用户在模板中定义的
    * logicalResourceType  资源的类型，是用户在模板中定义的
    * resourceStatus  此次事件的类型 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED`      - 生成失败 * `CREATION_COMPLETE`    - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED`      - 删除失败 * `DELETION_COMPLETE`    - 已经删除 * `DELETION_SKIPPED`     - 跳过删除。未来我们将支持，用户可以从资源编排服务中删除，但是不真的删除资源本身 * `UPDATE_IN_PROGRESS`   - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_FAILED`        - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_COMPLETE`      - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION
    * statusMessage  如果是成功状态或执行中状态，则没有信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'physicalResourceId' => 'string',
            'physicalResourceName' => 'string',
            'logicalResourceName' => 'string',
            'logicalResourceType' => 'string',
            'resourceStatus' => 'string',
            'statusMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * physicalResourceId  资源的物理id，由资源提供服务的provider在资源部署的时候生成
    * physicalResourceName  资源的物理名称，资源提供服务在资源部署的时候给予
    * logicalResourceName  资源名，是用户在模板中定义的
    * logicalResourceType  资源的类型，是用户在模板中定义的
    * resourceStatus  此次事件的类型 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED`      - 生成失败 * `CREATION_COMPLETE`    - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED`      - 删除失败 * `DELETION_COMPLETE`    - 已经删除 * `DELETION_SKIPPED`     - 跳过删除。未来我们将支持，用户可以从资源编排服务中删除，但是不真的删除资源本身 * `UPDATE_IN_PROGRESS`   - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_FAILED`        - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_COMPLETE`      - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION
    * statusMessage  如果是成功状态或执行中状态，则没有信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'physicalResourceId' => null,
        'physicalResourceName' => null,
        'logicalResourceName' => null,
        'logicalResourceType' => null,
        'resourceStatus' => null,
        'statusMessage' => null
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
    * physicalResourceId  资源的物理id，由资源提供服务的provider在资源部署的时候生成
    * physicalResourceName  资源的物理名称，资源提供服务在资源部署的时候给予
    * logicalResourceName  资源名，是用户在模板中定义的
    * logicalResourceType  资源的类型，是用户在模板中定义的
    * resourceStatus  此次事件的类型 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED`      - 生成失败 * `CREATION_COMPLETE`    - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED`      - 删除失败 * `DELETION_COMPLETE`    - 已经删除 * `DELETION_SKIPPED`     - 跳过删除。未来我们将支持，用户可以从资源编排服务中删除，但是不真的删除资源本身 * `UPDATE_IN_PROGRESS`   - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_FAILED`        - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_COMPLETE`      - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION
    * statusMessage  如果是成功状态或执行中状态，则没有信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'physicalResourceId' => 'physical_resource_id',
            'physicalResourceName' => 'physical_resource_name',
            'logicalResourceName' => 'logical_resource_name',
            'logicalResourceType' => 'logical_resource_type',
            'resourceStatus' => 'resource_status',
            'statusMessage' => 'status_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * physicalResourceId  资源的物理id，由资源提供服务的provider在资源部署的时候生成
    * physicalResourceName  资源的物理名称，资源提供服务在资源部署的时候给予
    * logicalResourceName  资源名，是用户在模板中定义的
    * logicalResourceType  资源的类型，是用户在模板中定义的
    * resourceStatus  此次事件的类型 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED`      - 生成失败 * `CREATION_COMPLETE`    - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED`      - 删除失败 * `DELETION_COMPLETE`    - 已经删除 * `DELETION_SKIPPED`     - 跳过删除。未来我们将支持，用户可以从资源编排服务中删除，但是不真的删除资源本身 * `UPDATE_IN_PROGRESS`   - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_FAILED`        - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_COMPLETE`      - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION
    * statusMessage  如果是成功状态或执行中状态，则没有信息
    *
    * @var string[]
    */
    protected static $setters = [
            'physicalResourceId' => 'setPhysicalResourceId',
            'physicalResourceName' => 'setPhysicalResourceName',
            'logicalResourceName' => 'setLogicalResourceName',
            'logicalResourceType' => 'setLogicalResourceType',
            'resourceStatus' => 'setResourceStatus',
            'statusMessage' => 'setStatusMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * physicalResourceId  资源的物理id，由资源提供服务的provider在资源部署的时候生成
    * physicalResourceName  资源的物理名称，资源提供服务在资源部署的时候给予
    * logicalResourceName  资源名，是用户在模板中定义的
    * logicalResourceType  资源的类型，是用户在模板中定义的
    * resourceStatus  此次事件的类型 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED`      - 生成失败 * `CREATION_COMPLETE`    - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED`      - 删除失败 * `DELETION_COMPLETE`    - 已经删除 * `DELETION_SKIPPED`     - 跳过删除。未来我们将支持，用户可以从资源编排服务中删除，但是不真的删除资源本身 * `UPDATE_IN_PROGRESS`   - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_FAILED`        - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_COMPLETE`      - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION
    * statusMessage  如果是成功状态或执行中状态，则没有信息
    *
    * @var string[]
    */
    protected static $getters = [
            'physicalResourceId' => 'getPhysicalResourceId',
            'physicalResourceName' => 'getPhysicalResourceName',
            'logicalResourceName' => 'getLogicalResourceName',
            'logicalResourceType' => 'getLogicalResourceType',
            'resourceStatus' => 'getResourceStatus',
            'statusMessage' => 'getStatusMessage'
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
    const RESOURCE_STATUS_CREATION_IN_PROGRESS = 'CREATION_IN_PROGRESS';
    const RESOURCE_STATUS_CREATION_FAILED = 'CREATION_FAILED';
    const RESOURCE_STATUS_CREATION_COMPLETE = 'CREATION_COMPLETE';
    const RESOURCE_STATUS_DELETION_IN_PROGRESS = 'DELETION_IN_PROGRESS';
    const RESOURCE_STATUS_DELETION_FAILED = 'DELETION_FAILED';
    const RESOURCE_STATUS_DELETION_COMPLETE = 'DELETION_COMPLETE';
    const RESOURCE_STATUS_DELETION_SKIPPED = 'DELETION_SKIPPED';
    const RESOURCE_STATUS_UPDATE_IN_PROGRESS = 'UPDATE_IN_PROGRESS';
    const RESOURCE_STATUS_UPDATE_FAILED = 'UPDATE_FAILED';
    const RESOURCE_STATUS_UPDATE_COMPLETE = 'UPDATE_COMPLETE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceStatusAllowableValues()
    {
        return [
            self::RESOURCE_STATUS_CREATION_IN_PROGRESS,
            self::RESOURCE_STATUS_CREATION_FAILED,
            self::RESOURCE_STATUS_CREATION_COMPLETE,
            self::RESOURCE_STATUS_DELETION_IN_PROGRESS,
            self::RESOURCE_STATUS_DELETION_FAILED,
            self::RESOURCE_STATUS_DELETION_COMPLETE,
            self::RESOURCE_STATUS_DELETION_SKIPPED,
            self::RESOURCE_STATUS_UPDATE_IN_PROGRESS,
            self::RESOURCE_STATUS_UPDATE_FAILED,
            self::RESOURCE_STATUS_UPDATE_COMPLETE,
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
        $this->container['physicalResourceId'] = isset($data['physicalResourceId']) ? $data['physicalResourceId'] : null;
        $this->container['physicalResourceName'] = isset($data['physicalResourceName']) ? $data['physicalResourceName'] : null;
        $this->container['logicalResourceName'] = isset($data['logicalResourceName']) ? $data['logicalResourceName'] : null;
        $this->container['logicalResourceType'] = isset($data['logicalResourceType']) ? $data['logicalResourceType'] : null;
        $this->container['resourceStatus'] = isset($data['resourceStatus']) ? $data['resourceStatus'] : null;
        $this->container['statusMessage'] = isset($data['statusMessage']) ? $data['statusMessage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getResourceStatusAllowableValues();
                if (!is_null($this->container['resourceStatus']) && !in_array($this->container['resourceStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets physicalResourceId
    *  资源的物理id，由资源提供服务的provider在资源部署的时候生成
    *
    * @return string|null
    */
    public function getPhysicalResourceId()
    {
        return $this->container['physicalResourceId'];
    }

    /**
    * Sets physicalResourceId
    *
    * @param string|null $physicalResourceId 资源的物理id，由资源提供服务的provider在资源部署的时候生成
    *
    * @return $this
    */
    public function setPhysicalResourceId($physicalResourceId)
    {
        $this->container['physicalResourceId'] = $physicalResourceId;
        return $this;
    }

    /**
    * Gets physicalResourceName
    *  资源的物理名称，资源提供服务在资源部署的时候给予
    *
    * @return string|null
    */
    public function getPhysicalResourceName()
    {
        return $this->container['physicalResourceName'];
    }

    /**
    * Sets physicalResourceName
    *
    * @param string|null $physicalResourceName 资源的物理名称，资源提供服务在资源部署的时候给予
    *
    * @return $this
    */
    public function setPhysicalResourceName($physicalResourceName)
    {
        $this->container['physicalResourceName'] = $physicalResourceName;
        return $this;
    }

    /**
    * Gets logicalResourceName
    *  资源名，是用户在模板中定义的
    *
    * @return string|null
    */
    public function getLogicalResourceName()
    {
        return $this->container['logicalResourceName'];
    }

    /**
    * Sets logicalResourceName
    *
    * @param string|null $logicalResourceName 资源名，是用户在模板中定义的
    *
    * @return $this
    */
    public function setLogicalResourceName($logicalResourceName)
    {
        $this->container['logicalResourceName'] = $logicalResourceName;
        return $this;
    }

    /**
    * Gets logicalResourceType
    *  资源的类型，是用户在模板中定义的
    *
    * @return string|null
    */
    public function getLogicalResourceType()
    {
        return $this->container['logicalResourceType'];
    }

    /**
    * Sets logicalResourceType
    *
    * @param string|null $logicalResourceType 资源的类型，是用户在模板中定义的
    *
    * @return $this
    */
    public function setLogicalResourceType($logicalResourceType)
    {
        $this->container['logicalResourceType'] = $logicalResourceType;
        return $this;
    }

    /**
    * Gets resourceStatus
    *  此次事件的类型 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED`      - 生成失败 * `CREATION_COMPLETE`    - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED`      - 删除失败 * `DELETION_COMPLETE`    - 已经删除 * `DELETION_SKIPPED`     - 跳过删除。未来我们将支持，用户可以从资源编排服务中删除，但是不真的删除资源本身 * `UPDATE_IN_PROGRESS`   - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_FAILED`        - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_COMPLETE`      - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION
    *
    * @return string|null
    */
    public function getResourceStatus()
    {
        return $this->container['resourceStatus'];
    }

    /**
    * Sets resourceStatus
    *
    * @param string|null $resourceStatus 此次事件的类型 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED`      - 生成失败 * `CREATION_COMPLETE`    - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED`      - 删除失败 * `DELETION_COMPLETE`    - 已经删除 * `DELETION_SKIPPED`     - 跳过删除。未来我们将支持，用户可以从资源编排服务中删除，但是不真的删除资源本身 * `UPDATE_IN_PROGRESS`   - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_FAILED`        - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_COMPLETE`      - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION
    *
    * @return $this
    */
    public function setResourceStatus($resourceStatus)
    {
        $this->container['resourceStatus'] = $resourceStatus;
        return $this;
    }

    /**
    * Gets statusMessage
    *  如果是成功状态或执行中状态，则没有信息
    *
    * @return string|null
    */
    public function getStatusMessage()
    {
        return $this->container['statusMessage'];
    }

    /**
    * Sets statusMessage
    *
    * @param string|null $statusMessage 如果是成功状态或执行中状态，则没有信息
    *
    * @return $this
    */
    public function setStatusMessage($statusMessage)
    {
        $this->container['statusMessage'] = $statusMessage;
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

