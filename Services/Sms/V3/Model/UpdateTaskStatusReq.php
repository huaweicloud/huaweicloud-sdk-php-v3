<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateTaskStatusReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateTaskStatusReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operation  操作任务的具体动作 start:开始任务 stop:停止任务 test:测试 clone_test:克隆测试 restart:重新开始 network_check:网络质量检测 skip:跳过一致性校验子任务 clear:清理快照资源 migration_test: 开始迁移演练
    * templateId  模板id
    * switchHce  是否切换hce
    * isNeedConsistencyCheck  是否进行一致性校验
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operation' => 'string',
            'templateId' => 'string',
            'switchHce' => 'bool',
            'isNeedConsistencyCheck' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operation  操作任务的具体动作 start:开始任务 stop:停止任务 test:测试 clone_test:克隆测试 restart:重新开始 network_check:网络质量检测 skip:跳过一致性校验子任务 clear:清理快照资源 migration_test: 开始迁移演练
    * templateId  模板id
    * switchHce  是否切换hce
    * isNeedConsistencyCheck  是否进行一致性校验
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operation' => null,
        'templateId' => null,
        'switchHce' => null,
        'isNeedConsistencyCheck' => null
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
    * operation  操作任务的具体动作 start:开始任务 stop:停止任务 test:测试 clone_test:克隆测试 restart:重新开始 network_check:网络质量检测 skip:跳过一致性校验子任务 clear:清理快照资源 migration_test: 开始迁移演练
    * templateId  模板id
    * switchHce  是否切换hce
    * isNeedConsistencyCheck  是否进行一致性校验
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operation' => 'operation',
            'templateId' => 'template_id',
            'switchHce' => 'switch_hce',
            'isNeedConsistencyCheck' => 'is_need_consistency_check'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operation  操作任务的具体动作 start:开始任务 stop:停止任务 test:测试 clone_test:克隆测试 restart:重新开始 network_check:网络质量检测 skip:跳过一致性校验子任务 clear:清理快照资源 migration_test: 开始迁移演练
    * templateId  模板id
    * switchHce  是否切换hce
    * isNeedConsistencyCheck  是否进行一致性校验
    *
    * @var string[]
    */
    protected static $setters = [
            'operation' => 'setOperation',
            'templateId' => 'setTemplateId',
            'switchHce' => 'setSwitchHce',
            'isNeedConsistencyCheck' => 'setIsNeedConsistencyCheck'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operation  操作任务的具体动作 start:开始任务 stop:停止任务 test:测试 clone_test:克隆测试 restart:重新开始 network_check:网络质量检测 skip:跳过一致性校验子任务 clear:清理快照资源 migration_test: 开始迁移演练
    * templateId  模板id
    * switchHce  是否切换hce
    * isNeedConsistencyCheck  是否进行一致性校验
    *
    * @var string[]
    */
    protected static $getters = [
            'operation' => 'getOperation',
            'templateId' => 'getTemplateId',
            'switchHce' => 'getSwitchHce',
            'isNeedConsistencyCheck' => 'getIsNeedConsistencyCheck'
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
    const OPERATION_START = 'start';
    const OPERATION_STOP = 'stop';
    const OPERATION_TEST = 'test';
    const OPERATION_CLONE_TEST = 'clone_test';
    const OPERATION_RESTART = 'restart';
    const OPERATION_NETWORK_CHECK = 'network_check';
    const OPERATION_CLEAR = 'clear';
    const OPERATION_SKIP = 'skip';
    const OPERATION_MIGRATION_TEST = 'migration_test';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperationAllowableValues()
    {
        return [
            self::OPERATION_START,
            self::OPERATION_STOP,
            self::OPERATION_TEST,
            self::OPERATION_CLONE_TEST,
            self::OPERATION_RESTART,
            self::OPERATION_NETWORK_CHECK,
            self::OPERATION_CLEAR,
            self::OPERATION_SKIP,
            self::OPERATION_MIGRATION_TEST,
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
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['switchHce'] = isset($data['switchHce']) ? $data['switchHce'] : null;
        $this->container['isNeedConsistencyCheck'] = isset($data['isNeedConsistencyCheck']) ? $data['isNeedConsistencyCheck'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['operation'] === null) {
            $invalidProperties[] = "'operation' can't be null";
        }
            $allowedValues = $this->getOperationAllowableValues();
                if (!is_null($this->container['operation']) && !in_array($this->container['operation'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operation', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['templateId']) && (mb_strlen($this->container['templateId']) > 2048)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['templateId']) && (mb_strlen($this->container['templateId']) < 0)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be bigger than or equal to 0.";
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
    * Gets operation
    *  操作任务的具体动作 start:开始任务 stop:停止任务 test:测试 clone_test:克隆测试 restart:重新开始 network_check:网络质量检测 skip:跳过一致性校验子任务 clear:清理快照资源 migration_test: 开始迁移演练
    *
    * @return string
    */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
    * Sets operation
    *
    * @param string $operation 操作任务的具体动作 start:开始任务 stop:停止任务 test:测试 clone_test:克隆测试 restart:重新开始 network_check:网络质量检测 skip:跳过一致性校验子任务 clear:清理快照资源 migration_test: 开始迁移演练
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
        return $this;
    }

    /**
    * Gets templateId
    *  模板id
    *
    * @return string|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string|null $templateId 模板id
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets switchHce
    *  是否切换hce
    *
    * @return bool|null
    */
    public function getSwitchHce()
    {
        return $this->container['switchHce'];
    }

    /**
    * Sets switchHce
    *
    * @param bool|null $switchHce 是否切换hce
    *
    * @return $this
    */
    public function setSwitchHce($switchHce)
    {
        $this->container['switchHce'] = $switchHce;
        return $this;
    }

    /**
    * Gets isNeedConsistencyCheck
    *  是否进行一致性校验
    *
    * @return bool|null
    */
    public function getIsNeedConsistencyCheck()
    {
        return $this->container['isNeedConsistencyCheck'];
    }

    /**
    * Sets isNeedConsistencyCheck
    *
    * @param bool|null $isNeedConsistencyCheck 是否进行一致性校验
    *
    * @return $this
    */
    public function setIsNeedConsistencyCheck($isNeedConsistencyCheck)
    {
        $this->container['isNeedConsistencyCheck'] = $isNeedConsistencyCheck;
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

