<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupRestoreOptionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupRestoreOptionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isCover  是否覆盖目标数据库，不填默认为false。  值为“true”表示覆盖。  值为“false”表示不覆盖。
    * isDefaultRestore  是否默认恢复，默认恢复所有数据库。  “true”是代表默认恢复还原备份文件中的全部数据库。  “false”代表需要在db_names这个字段中指定需要恢复的数据库名。
    * isLastBackup  一次典型的增量恢复过程，会涉及多次恢复增量备份。每个增量备份恢复均会使目标数据库保持还原中状态，此时数据库不可读写，直至最后一个增量备份恢复完成后，数据库才能变成可用状态。此后数据库将无法继续进行增量恢复，所以确定为最后一个备份的场景有：  一次性全量迁移，后续将不再进行增量恢复时，设置该字段值为“true”。  增量恢复流程中，确定为最后割接阶段的最后一个增量备份时，设置该字段值为“false”。
    * isPrecheck  是否执行预校验。 true：执行。 false：不执行。
    * recoveryMode  恢复模式：  “full”表示全量迁移。  “incre”表示增量迁移 。
    * dbNames  数据库名称。
    * resetDbNameMap  该字段为一个map，目前使用格式key是\"\"，value是新数据库名字。 该功能将忽略备份文件中原有的数据库名，通过DRS将其恢复为指定的新数据库名。 使用条件： - 备份文件中只有一个数据库。 - 备份文件是全量备份类型（待恢复备份类型选择：全量备份），且是一次性恢复（最后一个备份选择：是）。
    * isDeleteBackupFile  该参数控制使用OBS桶中备份文件恢复时，当任务结束时是否删除下载到RDS for SQL server磁盘中的OBS备份文件，默认删除。 - true 删除 - false 不删除
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isCover' => 'bool',
            'isDefaultRestore' => 'bool',
            'isLastBackup' => 'bool',
            'isPrecheck' => 'bool',
            'recoveryMode' => 'string',
            'dbNames' => 'string[]',
            'resetDbNameMap' => 'map[string,string]',
            'isDeleteBackupFile' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isCover  是否覆盖目标数据库，不填默认为false。  值为“true”表示覆盖。  值为“false”表示不覆盖。
    * isDefaultRestore  是否默认恢复，默认恢复所有数据库。  “true”是代表默认恢复还原备份文件中的全部数据库。  “false”代表需要在db_names这个字段中指定需要恢复的数据库名。
    * isLastBackup  一次典型的增量恢复过程，会涉及多次恢复增量备份。每个增量备份恢复均会使目标数据库保持还原中状态，此时数据库不可读写，直至最后一个增量备份恢复完成后，数据库才能变成可用状态。此后数据库将无法继续进行增量恢复，所以确定为最后一个备份的场景有：  一次性全量迁移，后续将不再进行增量恢复时，设置该字段值为“true”。  增量恢复流程中，确定为最后割接阶段的最后一个增量备份时，设置该字段值为“false”。
    * isPrecheck  是否执行预校验。 true：执行。 false：不执行。
    * recoveryMode  恢复模式：  “full”表示全量迁移。  “incre”表示增量迁移 。
    * dbNames  数据库名称。
    * resetDbNameMap  该字段为一个map，目前使用格式key是\"\"，value是新数据库名字。 该功能将忽略备份文件中原有的数据库名，通过DRS将其恢复为指定的新数据库名。 使用条件： - 备份文件中只有一个数据库。 - 备份文件是全量备份类型（待恢复备份类型选择：全量备份），且是一次性恢复（最后一个备份选择：是）。
    * isDeleteBackupFile  该参数控制使用OBS桶中备份文件恢复时，当任务结束时是否删除下载到RDS for SQL server磁盘中的OBS备份文件，默认删除。 - true 删除 - false 不删除
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isCover' => null,
        'isDefaultRestore' => null,
        'isLastBackup' => null,
        'isPrecheck' => null,
        'recoveryMode' => null,
        'dbNames' => null,
        'resetDbNameMap' => null,
        'isDeleteBackupFile' => null
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
    * isCover  是否覆盖目标数据库，不填默认为false。  值为“true”表示覆盖。  值为“false”表示不覆盖。
    * isDefaultRestore  是否默认恢复，默认恢复所有数据库。  “true”是代表默认恢复还原备份文件中的全部数据库。  “false”代表需要在db_names这个字段中指定需要恢复的数据库名。
    * isLastBackup  一次典型的增量恢复过程，会涉及多次恢复增量备份。每个增量备份恢复均会使目标数据库保持还原中状态，此时数据库不可读写，直至最后一个增量备份恢复完成后，数据库才能变成可用状态。此后数据库将无法继续进行增量恢复，所以确定为最后一个备份的场景有：  一次性全量迁移，后续将不再进行增量恢复时，设置该字段值为“true”。  增量恢复流程中，确定为最后割接阶段的最后一个增量备份时，设置该字段值为“false”。
    * isPrecheck  是否执行预校验。 true：执行。 false：不执行。
    * recoveryMode  恢复模式：  “full”表示全量迁移。  “incre”表示增量迁移 。
    * dbNames  数据库名称。
    * resetDbNameMap  该字段为一个map，目前使用格式key是\"\"，value是新数据库名字。 该功能将忽略备份文件中原有的数据库名，通过DRS将其恢复为指定的新数据库名。 使用条件： - 备份文件中只有一个数据库。 - 备份文件是全量备份类型（待恢复备份类型选择：全量备份），且是一次性恢复（最后一个备份选择：是）。
    * isDeleteBackupFile  该参数控制使用OBS桶中备份文件恢复时，当任务结束时是否删除下载到RDS for SQL server磁盘中的OBS备份文件，默认删除。 - true 删除 - false 不删除
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isCover' => 'is_cover',
            'isDefaultRestore' => 'is_default_restore',
            'isLastBackup' => 'is_last_backup',
            'isPrecheck' => 'is_precheck',
            'recoveryMode' => 'recovery_mode',
            'dbNames' => 'db_names',
            'resetDbNameMap' => 'reset_db_name_map',
            'isDeleteBackupFile' => 'is_delete_backup_file'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isCover  是否覆盖目标数据库，不填默认为false。  值为“true”表示覆盖。  值为“false”表示不覆盖。
    * isDefaultRestore  是否默认恢复，默认恢复所有数据库。  “true”是代表默认恢复还原备份文件中的全部数据库。  “false”代表需要在db_names这个字段中指定需要恢复的数据库名。
    * isLastBackup  一次典型的增量恢复过程，会涉及多次恢复增量备份。每个增量备份恢复均会使目标数据库保持还原中状态，此时数据库不可读写，直至最后一个增量备份恢复完成后，数据库才能变成可用状态。此后数据库将无法继续进行增量恢复，所以确定为最后一个备份的场景有：  一次性全量迁移，后续将不再进行增量恢复时，设置该字段值为“true”。  增量恢复流程中，确定为最后割接阶段的最后一个增量备份时，设置该字段值为“false”。
    * isPrecheck  是否执行预校验。 true：执行。 false：不执行。
    * recoveryMode  恢复模式：  “full”表示全量迁移。  “incre”表示增量迁移 。
    * dbNames  数据库名称。
    * resetDbNameMap  该字段为一个map，目前使用格式key是\"\"，value是新数据库名字。 该功能将忽略备份文件中原有的数据库名，通过DRS将其恢复为指定的新数据库名。 使用条件： - 备份文件中只有一个数据库。 - 备份文件是全量备份类型（待恢复备份类型选择：全量备份），且是一次性恢复（最后一个备份选择：是）。
    * isDeleteBackupFile  该参数控制使用OBS桶中备份文件恢复时，当任务结束时是否删除下载到RDS for SQL server磁盘中的OBS备份文件，默认删除。 - true 删除 - false 不删除
    *
    * @var string[]
    */
    protected static $setters = [
            'isCover' => 'setIsCover',
            'isDefaultRestore' => 'setIsDefaultRestore',
            'isLastBackup' => 'setIsLastBackup',
            'isPrecheck' => 'setIsPrecheck',
            'recoveryMode' => 'setRecoveryMode',
            'dbNames' => 'setDbNames',
            'resetDbNameMap' => 'setResetDbNameMap',
            'isDeleteBackupFile' => 'setIsDeleteBackupFile'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isCover  是否覆盖目标数据库，不填默认为false。  值为“true”表示覆盖。  值为“false”表示不覆盖。
    * isDefaultRestore  是否默认恢复，默认恢复所有数据库。  “true”是代表默认恢复还原备份文件中的全部数据库。  “false”代表需要在db_names这个字段中指定需要恢复的数据库名。
    * isLastBackup  一次典型的增量恢复过程，会涉及多次恢复增量备份。每个增量备份恢复均会使目标数据库保持还原中状态，此时数据库不可读写，直至最后一个增量备份恢复完成后，数据库才能变成可用状态。此后数据库将无法继续进行增量恢复，所以确定为最后一个备份的场景有：  一次性全量迁移，后续将不再进行增量恢复时，设置该字段值为“true”。  增量恢复流程中，确定为最后割接阶段的最后一个增量备份时，设置该字段值为“false”。
    * isPrecheck  是否执行预校验。 true：执行。 false：不执行。
    * recoveryMode  恢复模式：  “full”表示全量迁移。  “incre”表示增量迁移 。
    * dbNames  数据库名称。
    * resetDbNameMap  该字段为一个map，目前使用格式key是\"\"，value是新数据库名字。 该功能将忽略备份文件中原有的数据库名，通过DRS将其恢复为指定的新数据库名。 使用条件： - 备份文件中只有一个数据库。 - 备份文件是全量备份类型（待恢复备份类型选择：全量备份），且是一次性恢复（最后一个备份选择：是）。
    * isDeleteBackupFile  该参数控制使用OBS桶中备份文件恢复时，当任务结束时是否删除下载到RDS for SQL server磁盘中的OBS备份文件，默认删除。 - true 删除 - false 不删除
    *
    * @var string[]
    */
    protected static $getters = [
            'isCover' => 'getIsCover',
            'isDefaultRestore' => 'getIsDefaultRestore',
            'isLastBackup' => 'getIsLastBackup',
            'isPrecheck' => 'getIsPrecheck',
            'recoveryMode' => 'getRecoveryMode',
            'dbNames' => 'getDbNames',
            'resetDbNameMap' => 'getResetDbNameMap',
            'isDeleteBackupFile' => 'getIsDeleteBackupFile'
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
    const RECOVERY_MODE_FULL = 'full';
    const RECOVERY_MODE_INCRE = 'incre';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRecoveryModeAllowableValues()
    {
        return [
            self::RECOVERY_MODE_FULL,
            self::RECOVERY_MODE_INCRE,
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
        $this->container['isCover'] = isset($data['isCover']) ? $data['isCover'] : null;
        $this->container['isDefaultRestore'] = isset($data['isDefaultRestore']) ? $data['isDefaultRestore'] : null;
        $this->container['isLastBackup'] = isset($data['isLastBackup']) ? $data['isLastBackup'] : null;
        $this->container['isPrecheck'] = isset($data['isPrecheck']) ? $data['isPrecheck'] : null;
        $this->container['recoveryMode'] = isset($data['recoveryMode']) ? $data['recoveryMode'] : null;
        $this->container['dbNames'] = isset($data['dbNames']) ? $data['dbNames'] : null;
        $this->container['resetDbNameMap'] = isset($data['resetDbNameMap']) ? $data['resetDbNameMap'] : null;
        $this->container['isDeleteBackupFile'] = isset($data['isDeleteBackupFile']) ? $data['isDeleteBackupFile'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['isLastBackup'] === null) {
            $invalidProperties[] = "'isLastBackup' can't be null";
        }
        if ($this->container['isPrecheck'] === null) {
            $invalidProperties[] = "'isPrecheck' can't be null";
        }
        if ($this->container['recoveryMode'] === null) {
            $invalidProperties[] = "'recoveryMode' can't be null";
        }
            $allowedValues = $this->getRecoveryModeAllowableValues();
                if (!is_null($this->container['recoveryMode']) && !in_array($this->container['recoveryMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'recoveryMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['recoveryMode']) > 128)) {
                $invalidProperties[] = "invalid value for 'recoveryMode', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['recoveryMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'recoveryMode', the character length must be bigger than or equal to 0.";
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
    * Gets isCover
    *  是否覆盖目标数据库，不填默认为false。  值为“true”表示覆盖。  值为“false”表示不覆盖。
    *
    * @return bool|null
    */
    public function getIsCover()
    {
        return $this->container['isCover'];
    }

    /**
    * Sets isCover
    *
    * @param bool|null $isCover 是否覆盖目标数据库，不填默认为false。  值为“true”表示覆盖。  值为“false”表示不覆盖。
    *
    * @return $this
    */
    public function setIsCover($isCover)
    {
        $this->container['isCover'] = $isCover;
        return $this;
    }

    /**
    * Gets isDefaultRestore
    *  是否默认恢复，默认恢复所有数据库。  “true”是代表默认恢复还原备份文件中的全部数据库。  “false”代表需要在db_names这个字段中指定需要恢复的数据库名。
    *
    * @return bool|null
    */
    public function getIsDefaultRestore()
    {
        return $this->container['isDefaultRestore'];
    }

    /**
    * Sets isDefaultRestore
    *
    * @param bool|null $isDefaultRestore 是否默认恢复，默认恢复所有数据库。  “true”是代表默认恢复还原备份文件中的全部数据库。  “false”代表需要在db_names这个字段中指定需要恢复的数据库名。
    *
    * @return $this
    */
    public function setIsDefaultRestore($isDefaultRestore)
    {
        $this->container['isDefaultRestore'] = $isDefaultRestore;
        return $this;
    }

    /**
    * Gets isLastBackup
    *  一次典型的增量恢复过程，会涉及多次恢复增量备份。每个增量备份恢复均会使目标数据库保持还原中状态，此时数据库不可读写，直至最后一个增量备份恢复完成后，数据库才能变成可用状态。此后数据库将无法继续进行增量恢复，所以确定为最后一个备份的场景有：  一次性全量迁移，后续将不再进行增量恢复时，设置该字段值为“true”。  增量恢复流程中，确定为最后割接阶段的最后一个增量备份时，设置该字段值为“false”。
    *
    * @return bool
    */
    public function getIsLastBackup()
    {
        return $this->container['isLastBackup'];
    }

    /**
    * Sets isLastBackup
    *
    * @param bool $isLastBackup 一次典型的增量恢复过程，会涉及多次恢复增量备份。每个增量备份恢复均会使目标数据库保持还原中状态，此时数据库不可读写，直至最后一个增量备份恢复完成后，数据库才能变成可用状态。此后数据库将无法继续进行增量恢复，所以确定为最后一个备份的场景有：  一次性全量迁移，后续将不再进行增量恢复时，设置该字段值为“true”。  增量恢复流程中，确定为最后割接阶段的最后一个增量备份时，设置该字段值为“false”。
    *
    * @return $this
    */
    public function setIsLastBackup($isLastBackup)
    {
        $this->container['isLastBackup'] = $isLastBackup;
        return $this;
    }

    /**
    * Gets isPrecheck
    *  是否执行预校验。 true：执行。 false：不执行。
    *
    * @return bool
    */
    public function getIsPrecheck()
    {
        return $this->container['isPrecheck'];
    }

    /**
    * Sets isPrecheck
    *
    * @param bool $isPrecheck 是否执行预校验。 true：执行。 false：不执行。
    *
    * @return $this
    */
    public function setIsPrecheck($isPrecheck)
    {
        $this->container['isPrecheck'] = $isPrecheck;
        return $this;
    }

    /**
    * Gets recoveryMode
    *  恢复模式：  “full”表示全量迁移。  “incre”表示增量迁移 。
    *
    * @return string
    */
    public function getRecoveryMode()
    {
        return $this->container['recoveryMode'];
    }

    /**
    * Sets recoveryMode
    *
    * @param string $recoveryMode 恢复模式：  “full”表示全量迁移。  “incre”表示增量迁移 。
    *
    * @return $this
    */
    public function setRecoveryMode($recoveryMode)
    {
        $this->container['recoveryMode'] = $recoveryMode;
        return $this;
    }

    /**
    * Gets dbNames
    *  数据库名称。
    *
    * @return string[]|null
    */
    public function getDbNames()
    {
        return $this->container['dbNames'];
    }

    /**
    * Sets dbNames
    *
    * @param string[]|null $dbNames 数据库名称。
    *
    * @return $this
    */
    public function setDbNames($dbNames)
    {
        $this->container['dbNames'] = $dbNames;
        return $this;
    }

    /**
    * Gets resetDbNameMap
    *  该字段为一个map，目前使用格式key是\"\"，value是新数据库名字。 该功能将忽略备份文件中原有的数据库名，通过DRS将其恢复为指定的新数据库名。 使用条件： - 备份文件中只有一个数据库。 - 备份文件是全量备份类型（待恢复备份类型选择：全量备份），且是一次性恢复（最后一个备份选择：是）。
    *
    * @return map[string,string]|null
    */
    public function getResetDbNameMap()
    {
        return $this->container['resetDbNameMap'];
    }

    /**
    * Sets resetDbNameMap
    *
    * @param map[string,string]|null $resetDbNameMap 该字段为一个map，目前使用格式key是\"\"，value是新数据库名字。 该功能将忽略备份文件中原有的数据库名，通过DRS将其恢复为指定的新数据库名。 使用条件： - 备份文件中只有一个数据库。 - 备份文件是全量备份类型（待恢复备份类型选择：全量备份），且是一次性恢复（最后一个备份选择：是）。
    *
    * @return $this
    */
    public function setResetDbNameMap($resetDbNameMap)
    {
        $this->container['resetDbNameMap'] = $resetDbNameMap;
        return $this;
    }

    /**
    * Gets isDeleteBackupFile
    *  该参数控制使用OBS桶中备份文件恢复时，当任务结束时是否删除下载到RDS for SQL server磁盘中的OBS备份文件，默认删除。 - true 删除 - false 不删除
    *
    * @return bool|null
    */
    public function getIsDeleteBackupFile()
    {
        return $this->container['isDeleteBackupFile'];
    }

    /**
    * Sets isDeleteBackupFile
    *
    * @param bool|null $isDeleteBackupFile 该参数控制使用OBS桶中备份文件恢复时，当任务结束时是否删除下载到RDS for SQL server磁盘中的OBS备份文件，默认删除。 - true 删除 - false 不删除
    *
    * @return $this
    */
    public function setIsDeleteBackupFile($isDeleteBackupFile)
    {
        $this->container['isDeleteBackupFile'] = $isDeleteBackupFile;
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

