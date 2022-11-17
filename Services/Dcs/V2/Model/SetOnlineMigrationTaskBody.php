<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetOnlineMigrationTaskBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SetOnlineMigrationTaskBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * migrationMethod  迁移方式，包括全量迁移和增量迁移两种类型。 - 全量迁移：该模式为Redis的一次性迁移，适用于可中断业务的迁移场景。   全量迁移过程中，如果源Redis有数据更新，这部分更新数据不会被迁移到目标Redis。 - 增量迁移：该模式为Redis的持续性迁移，适用于对业务中断敏感的迁移场景。   增量迁移阶段通过解析日志等技术， 持续保持源Redis和目标端Redis的数据一致。 取值范围： - full_amount_migration：表示全量迁移。 - incremental_migration：表示增量迁移。
    * resumeMode  自动重连，根据参数决定是否自动重连。 自动重连模式在遇到网络等异常情况时，会无限自动重试。 自动重连模式在无法进行增量同步时，会触发全量同步，增加带宽占用，请谨慎选择。 取值范围： - auto：自动重连。 - manual：手动重连。
    * bandwidthLimitMb  带宽限制，当迁移方式为增量迁移时，为保证业务正常运行，您可以启用带宽限制功能，当数据同步速度达到带宽限制时，将限制同步速度的继续增长。 -限制为MB/s -取值范围：1-10,241(大于0小于10,241的整数)
    * sourceInstance  sourceInstance
    * targetInstance  targetInstance
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'migrationMethod' => 'string',
            'resumeMode' => 'string',
            'bandwidthLimitMb' => 'string',
            'sourceInstance' => '\HuaweiCloud\SDK\Dcs\V2\Model\ConfigMigrationInstanceBody',
            'targetInstance' => '\HuaweiCloud\SDK\Dcs\V2\Model\ConfigMigrationInstanceBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * migrationMethod  迁移方式，包括全量迁移和增量迁移两种类型。 - 全量迁移：该模式为Redis的一次性迁移，适用于可中断业务的迁移场景。   全量迁移过程中，如果源Redis有数据更新，这部分更新数据不会被迁移到目标Redis。 - 增量迁移：该模式为Redis的持续性迁移，适用于对业务中断敏感的迁移场景。   增量迁移阶段通过解析日志等技术， 持续保持源Redis和目标端Redis的数据一致。 取值范围： - full_amount_migration：表示全量迁移。 - incremental_migration：表示增量迁移。
    * resumeMode  自动重连，根据参数决定是否自动重连。 自动重连模式在遇到网络等异常情况时，会无限自动重试。 自动重连模式在无法进行增量同步时，会触发全量同步，增加带宽占用，请谨慎选择。 取值范围： - auto：自动重连。 - manual：手动重连。
    * bandwidthLimitMb  带宽限制，当迁移方式为增量迁移时，为保证业务正常运行，您可以启用带宽限制功能，当数据同步速度达到带宽限制时，将限制同步速度的继续增长。 -限制为MB/s -取值范围：1-10,241(大于0小于10,241的整数)
    * sourceInstance  sourceInstance
    * targetInstance  targetInstance
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'migrationMethod' => null,
        'resumeMode' => null,
        'bandwidthLimitMb' => null,
        'sourceInstance' => null,
        'targetInstance' => null
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
    * migrationMethod  迁移方式，包括全量迁移和增量迁移两种类型。 - 全量迁移：该模式为Redis的一次性迁移，适用于可中断业务的迁移场景。   全量迁移过程中，如果源Redis有数据更新，这部分更新数据不会被迁移到目标Redis。 - 增量迁移：该模式为Redis的持续性迁移，适用于对业务中断敏感的迁移场景。   增量迁移阶段通过解析日志等技术， 持续保持源Redis和目标端Redis的数据一致。 取值范围： - full_amount_migration：表示全量迁移。 - incremental_migration：表示增量迁移。
    * resumeMode  自动重连，根据参数决定是否自动重连。 自动重连模式在遇到网络等异常情况时，会无限自动重试。 自动重连模式在无法进行增量同步时，会触发全量同步，增加带宽占用，请谨慎选择。 取值范围： - auto：自动重连。 - manual：手动重连。
    * bandwidthLimitMb  带宽限制，当迁移方式为增量迁移时，为保证业务正常运行，您可以启用带宽限制功能，当数据同步速度达到带宽限制时，将限制同步速度的继续增长。 -限制为MB/s -取值范围：1-10,241(大于0小于10,241的整数)
    * sourceInstance  sourceInstance
    * targetInstance  targetInstance
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'migrationMethod' => 'migration_method',
            'resumeMode' => 'resume_mode',
            'bandwidthLimitMb' => 'bandwidth_limit_mb',
            'sourceInstance' => 'source_instance',
            'targetInstance' => 'target_instance'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * migrationMethod  迁移方式，包括全量迁移和增量迁移两种类型。 - 全量迁移：该模式为Redis的一次性迁移，适用于可中断业务的迁移场景。   全量迁移过程中，如果源Redis有数据更新，这部分更新数据不会被迁移到目标Redis。 - 增量迁移：该模式为Redis的持续性迁移，适用于对业务中断敏感的迁移场景。   增量迁移阶段通过解析日志等技术， 持续保持源Redis和目标端Redis的数据一致。 取值范围： - full_amount_migration：表示全量迁移。 - incremental_migration：表示增量迁移。
    * resumeMode  自动重连，根据参数决定是否自动重连。 自动重连模式在遇到网络等异常情况时，会无限自动重试。 自动重连模式在无法进行增量同步时，会触发全量同步，增加带宽占用，请谨慎选择。 取值范围： - auto：自动重连。 - manual：手动重连。
    * bandwidthLimitMb  带宽限制，当迁移方式为增量迁移时，为保证业务正常运行，您可以启用带宽限制功能，当数据同步速度达到带宽限制时，将限制同步速度的继续增长。 -限制为MB/s -取值范围：1-10,241(大于0小于10,241的整数)
    * sourceInstance  sourceInstance
    * targetInstance  targetInstance
    *
    * @var string[]
    */
    protected static $setters = [
            'migrationMethod' => 'setMigrationMethod',
            'resumeMode' => 'setResumeMode',
            'bandwidthLimitMb' => 'setBandwidthLimitMb',
            'sourceInstance' => 'setSourceInstance',
            'targetInstance' => 'setTargetInstance'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * migrationMethod  迁移方式，包括全量迁移和增量迁移两种类型。 - 全量迁移：该模式为Redis的一次性迁移，适用于可中断业务的迁移场景。   全量迁移过程中，如果源Redis有数据更新，这部分更新数据不会被迁移到目标Redis。 - 增量迁移：该模式为Redis的持续性迁移，适用于对业务中断敏感的迁移场景。   增量迁移阶段通过解析日志等技术， 持续保持源Redis和目标端Redis的数据一致。 取值范围： - full_amount_migration：表示全量迁移。 - incremental_migration：表示增量迁移。
    * resumeMode  自动重连，根据参数决定是否自动重连。 自动重连模式在遇到网络等异常情况时，会无限自动重试。 自动重连模式在无法进行增量同步时，会触发全量同步，增加带宽占用，请谨慎选择。 取值范围： - auto：自动重连。 - manual：手动重连。
    * bandwidthLimitMb  带宽限制，当迁移方式为增量迁移时，为保证业务正常运行，您可以启用带宽限制功能，当数据同步速度达到带宽限制时，将限制同步速度的继续增长。 -限制为MB/s -取值范围：1-10,241(大于0小于10,241的整数)
    * sourceInstance  sourceInstance
    * targetInstance  targetInstance
    *
    * @var string[]
    */
    protected static $getters = [
            'migrationMethod' => 'getMigrationMethod',
            'resumeMode' => 'getResumeMode',
            'bandwidthLimitMb' => 'getBandwidthLimitMb',
            'sourceInstance' => 'getSourceInstance',
            'targetInstance' => 'getTargetInstance'
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
    const MIGRATION_METHOD_FULL_AMOUNT_MIGRATION = 'full_amount_migration';
    const MIGRATION_METHOD_INCREMENTAL_MIGRATION = 'incremental_migration';
    const RESUME_MODE_AUTO = 'auto';
    const RESUME_MODE_MANUAL = 'manual';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMigrationMethodAllowableValues()
    {
        return [
            self::MIGRATION_METHOD_FULL_AMOUNT_MIGRATION,
            self::MIGRATION_METHOD_INCREMENTAL_MIGRATION,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResumeModeAllowableValues()
    {
        return [
            self::RESUME_MODE_AUTO,
            self::RESUME_MODE_MANUAL,
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
        $this->container['migrationMethod'] = isset($data['migrationMethod']) ? $data['migrationMethod'] : null;
        $this->container['resumeMode'] = isset($data['resumeMode']) ? $data['resumeMode'] : null;
        $this->container['bandwidthLimitMb'] = isset($data['bandwidthLimitMb']) ? $data['bandwidthLimitMb'] : null;
        $this->container['sourceInstance'] = isset($data['sourceInstance']) ? $data['sourceInstance'] : null;
        $this->container['targetInstance'] = isset($data['targetInstance']) ? $data['targetInstance'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['migrationMethod'] === null) {
            $invalidProperties[] = "'migrationMethod' can't be null";
        }
            $allowedValues = $this->getMigrationMethodAllowableValues();
                if (!is_null($this->container['migrationMethod']) && !in_array($this->container['migrationMethod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'migrationMethod', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['resumeMode'] === null) {
            $invalidProperties[] = "'resumeMode' can't be null";
        }
            $allowedValues = $this->getResumeModeAllowableValues();
                if (!is_null($this->container['resumeMode']) && !in_array($this->container['resumeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resumeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['sourceInstance'] === null) {
            $invalidProperties[] = "'sourceInstance' can't be null";
        }
        if ($this->container['targetInstance'] === null) {
            $invalidProperties[] = "'targetInstance' can't be null";
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
    * Gets migrationMethod
    *  迁移方式，包括全量迁移和增量迁移两种类型。 - 全量迁移：该模式为Redis的一次性迁移，适用于可中断业务的迁移场景。   全量迁移过程中，如果源Redis有数据更新，这部分更新数据不会被迁移到目标Redis。 - 增量迁移：该模式为Redis的持续性迁移，适用于对业务中断敏感的迁移场景。   增量迁移阶段通过解析日志等技术， 持续保持源Redis和目标端Redis的数据一致。 取值范围： - full_amount_migration：表示全量迁移。 - incremental_migration：表示增量迁移。
    *
    * @return string
    */
    public function getMigrationMethod()
    {
        return $this->container['migrationMethod'];
    }

    /**
    * Sets migrationMethod
    *
    * @param string $migrationMethod 迁移方式，包括全量迁移和增量迁移两种类型。 - 全量迁移：该模式为Redis的一次性迁移，适用于可中断业务的迁移场景。   全量迁移过程中，如果源Redis有数据更新，这部分更新数据不会被迁移到目标Redis。 - 增量迁移：该模式为Redis的持续性迁移，适用于对业务中断敏感的迁移场景。   增量迁移阶段通过解析日志等技术， 持续保持源Redis和目标端Redis的数据一致。 取值范围： - full_amount_migration：表示全量迁移。 - incremental_migration：表示增量迁移。
    *
    * @return $this
    */
    public function setMigrationMethod($migrationMethod)
    {
        $this->container['migrationMethod'] = $migrationMethod;
        return $this;
    }

    /**
    * Gets resumeMode
    *  自动重连，根据参数决定是否自动重连。 自动重连模式在遇到网络等异常情况时，会无限自动重试。 自动重连模式在无法进行增量同步时，会触发全量同步，增加带宽占用，请谨慎选择。 取值范围： - auto：自动重连。 - manual：手动重连。
    *
    * @return string
    */
    public function getResumeMode()
    {
        return $this->container['resumeMode'];
    }

    /**
    * Sets resumeMode
    *
    * @param string $resumeMode 自动重连，根据参数决定是否自动重连。 自动重连模式在遇到网络等异常情况时，会无限自动重试。 自动重连模式在无法进行增量同步时，会触发全量同步，增加带宽占用，请谨慎选择。 取值范围： - auto：自动重连。 - manual：手动重连。
    *
    * @return $this
    */
    public function setResumeMode($resumeMode)
    {
        $this->container['resumeMode'] = $resumeMode;
        return $this;
    }

    /**
    * Gets bandwidthLimitMb
    *  带宽限制，当迁移方式为增量迁移时，为保证业务正常运行，您可以启用带宽限制功能，当数据同步速度达到带宽限制时，将限制同步速度的继续增长。 -限制为MB/s -取值范围：1-10,241(大于0小于10,241的整数)
    *
    * @return string|null
    */
    public function getBandwidthLimitMb()
    {
        return $this->container['bandwidthLimitMb'];
    }

    /**
    * Sets bandwidthLimitMb
    *
    * @param string|null $bandwidthLimitMb 带宽限制，当迁移方式为增量迁移时，为保证业务正常运行，您可以启用带宽限制功能，当数据同步速度达到带宽限制时，将限制同步速度的继续增长。 -限制为MB/s -取值范围：1-10,241(大于0小于10,241的整数)
    *
    * @return $this
    */
    public function setBandwidthLimitMb($bandwidthLimitMb)
    {
        $this->container['bandwidthLimitMb'] = $bandwidthLimitMb;
        return $this;
    }

    /**
    * Gets sourceInstance
    *  sourceInstance
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\ConfigMigrationInstanceBody
    */
    public function getSourceInstance()
    {
        return $this->container['sourceInstance'];
    }

    /**
    * Sets sourceInstance
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\ConfigMigrationInstanceBody $sourceInstance sourceInstance
    *
    * @return $this
    */
    public function setSourceInstance($sourceInstance)
    {
        $this->container['sourceInstance'] = $sourceInstance;
        return $this;
    }

    /**
    * Gets targetInstance
    *  targetInstance
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\ConfigMigrationInstanceBody
    */
    public function getTargetInstance()
    {
        return $this->container['targetInstance'];
    }

    /**
    * Sets targetInstance
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\ConfigMigrationInstanceBody $targetInstance targetInstance
    *
    * @return $this
    */
    public function setTargetInstance($targetInstance)
    {
        $this->container['targetInstance'] = $targetInstance;
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

