<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StackStatusPrimitiveTypeHolder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StackStatusPrimitiveTypeHolder';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  资源栈的状态     * `CREATION_COMPLETE` - 生成空资源栈完成，并没有任何部署     * `DEPLOYMENT_IN_PROGRESS` - 正在部署，请等待     * `DEPLOYMENT_FAILED` - 部署失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `DEPLOYMENT_COMPLETE` - 部署完成     * `ROLLBACK_IN_PROGRESS` - 部署失败，正在回滚，请等待     * `ROLLBACK_FAILED` - 回滚失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `ROLLBACK_COMPLETE` - 回滚完成     * `DELETION_IN_PROGRESS` - 正在删除，请等待     * `DELETION_FAILED` - 删除失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  资源栈的状态     * `CREATION_COMPLETE` - 生成空资源栈完成，并没有任何部署     * `DEPLOYMENT_IN_PROGRESS` - 正在部署，请等待     * `DEPLOYMENT_FAILED` - 部署失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `DEPLOYMENT_COMPLETE` - 部署完成     * `ROLLBACK_IN_PROGRESS` - 部署失败，正在回滚，请等待     * `ROLLBACK_FAILED` - 回滚失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `ROLLBACK_COMPLETE` - 回滚完成     * `DELETION_IN_PROGRESS` - 正在删除，请等待     * `DELETION_FAILED` - 删除失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null
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
    * status  资源栈的状态     * `CREATION_COMPLETE` - 生成空资源栈完成，并没有任何部署     * `DEPLOYMENT_IN_PROGRESS` - 正在部署，请等待     * `DEPLOYMENT_FAILED` - 部署失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `DEPLOYMENT_COMPLETE` - 部署完成     * `ROLLBACK_IN_PROGRESS` - 部署失败，正在回滚，请等待     * `ROLLBACK_FAILED` - 回滚失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `ROLLBACK_COMPLETE` - 回滚完成     * `DELETION_IN_PROGRESS` - 正在删除，请等待     * `DELETION_FAILED` - 删除失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  资源栈的状态     * `CREATION_COMPLETE` - 生成空资源栈完成，并没有任何部署     * `DEPLOYMENT_IN_PROGRESS` - 正在部署，请等待     * `DEPLOYMENT_FAILED` - 部署失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `DEPLOYMENT_COMPLETE` - 部署完成     * `ROLLBACK_IN_PROGRESS` - 部署失败，正在回滚，请等待     * `ROLLBACK_FAILED` - 回滚失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `ROLLBACK_COMPLETE` - 回滚完成     * `DELETION_IN_PROGRESS` - 正在删除，请等待     * `DELETION_FAILED` - 删除失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  资源栈的状态     * `CREATION_COMPLETE` - 生成空资源栈完成，并没有任何部署     * `DEPLOYMENT_IN_PROGRESS` - 正在部署，请等待     * `DEPLOYMENT_FAILED` - 部署失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `DEPLOYMENT_COMPLETE` - 部署完成     * `ROLLBACK_IN_PROGRESS` - 部署失败，正在回滚，请等待     * `ROLLBACK_FAILED` - 回滚失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `ROLLBACK_COMPLETE` - 回滚完成     * `DELETION_IN_PROGRESS` - 正在删除，请等待     * `DELETION_FAILED` - 删除失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus'
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
    const STATUS_CREATION_COMPLETE = 'CREATION_COMPLETE';
    const STATUS_DEPLOYMENT_IN_PROGRESS = 'DEPLOYMENT_IN_PROGRESS';
    const STATUS_DEPLOYMENT_FAILED = 'DEPLOYMENT_FAILED';
    const STATUS_DEPLOYMENT_COMPLETE = 'DEPLOYMENT_COMPLETE';
    const STATUS_ROLLBACK_IN_PROGRESS = 'ROLLBACK_IN_PROGRESS';
    const STATUS_ROLLBACK_FAILED = 'ROLLBACK_FAILED';
    const STATUS_ROLLBACK_COMPLETE = 'ROLLBACK_COMPLETE';
    const STATUS_DELETION_IN_PROGRESS = 'DELETION_IN_PROGRESS';
    const STATUS_DELETION_FAILED = 'DELETION_FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATION_COMPLETE,
            self::STATUS_DEPLOYMENT_IN_PROGRESS,
            self::STATUS_DEPLOYMENT_FAILED,
            self::STATUS_DEPLOYMENT_COMPLETE,
            self::STATUS_ROLLBACK_IN_PROGRESS,
            self::STATUS_ROLLBACK_FAILED,
            self::STATUS_ROLLBACK_COMPLETE,
            self::STATUS_DELETION_IN_PROGRESS,
            self::STATUS_DELETION_FAILED,
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets status
    *  资源栈的状态     * `CREATION_COMPLETE` - 生成空资源栈完成，并没有任何部署     * `DEPLOYMENT_IN_PROGRESS` - 正在部署，请等待     * `DEPLOYMENT_FAILED` - 部署失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `DEPLOYMENT_COMPLETE` - 部署完成     * `ROLLBACK_IN_PROGRESS` - 部署失败，正在回滚，请等待     * `ROLLBACK_FAILED` - 回滚失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `ROLLBACK_COMPLETE` - 回滚完成     * `DELETION_IN_PROGRESS` - 正在删除，请等待     * `DELETION_FAILED` - 删除失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 资源栈的状态     * `CREATION_COMPLETE` - 生成空资源栈完成，并没有任何部署     * `DEPLOYMENT_IN_PROGRESS` - 正在部署，请等待     * `DEPLOYMENT_FAILED` - 部署失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `DEPLOYMENT_COMPLETE` - 部署完成     * `ROLLBACK_IN_PROGRESS` - 部署失败，正在回滚，请等待     * `ROLLBACK_FAILED` - 回滚失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `ROLLBACK_COMPLETE` - 回滚完成     * `DELETION_IN_PROGRESS` - 正在删除，请等待     * `DELETION_FAILED` - 删除失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

