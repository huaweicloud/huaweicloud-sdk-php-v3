<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SparseBackupPolicyForUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SparseBackupPolicyForUpdate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  参数解释：  备份策略ID。  约束限制：  备份策略可能关联多个已生成的备份集，修改、删除策略会对该策略所关联的已生成的备份集生效。如果修改某策略的备份保留天数小于原保留天数或删除某策略，可能会导致关联该条策略的现有全量备份过期删除，请检查策略后再次确认。  取值范围：  不填写ID时，表示新增一条备份策略。 填写当前存在的备份策略ID时，表示修改或删除该条备份策略的内容，ID获取方法请参见查询稀疏备份策略接口。 如您要删除该备份策略，请填写其keep_days为0，period为null，同时必须填写reserve_backups来说明是否保留已生成的与该条备份策略关联的自动备份。 如您要修改该备份策略，至少需要填写period、keep_days其中之一。  默认取值：  不涉及。
    * period  参数解释：  备份周期配置。  约束限制：  该字段为UTC时区的Cron表达式，和备份时间段start_time共同作用。实例基础备份策略的start_time获取方法请参见查询自动备份策略接口，稀疏备份策略的start_time与基础备份策略一致。 比如当地时区为UTC+08:00，接口查询到的start_time为21:00-22:00时，对应的备份时间是当地时间05:00-06:00。当您设置稀疏备份策略的period为1 * *，意为该条策略将在UTC时区的每月1号21:00-22:00执行任务，也即您所在的UTC+08:00时区的每月2号05:00-06:00执行任务。 新增策略时，此字段必填。  取值范围：  格式必须为“日期 月份 星期”形式的Cron表达式，时区为UTC时区，且需要符合周策略、月策略或者年策略的形式，规则如下： · 周策略 日期需填写*，月份需填写*。星期支持填写1~7（1表示星期一，2表示星期二，依次类推），支持填写多个数字，需以逗号隔开。 取值示例： \\* \\* 6 表示每周六执行任务。 \\* \\* 1,2,3 表示每周一、二、三执行任务。 · 月策略 月份需填写*，星期需填写*。日期支持填写1~28和特殊字符L（表示最后一天），支持填写多个数字，需以逗号隔开。 取值示例： 1,2 * * 表示每月1号、2号执行任务。 L * * 表示每月的最后一天执行任务。 · 年策略 星期需填写*。日期支持填写1~31，月份支持填写1~12，日期和月份的组合需要为有效的日期。 取值示例： 15 3 * 表示每年的3月15日执行任务。  默认取值：  不涉及。
    * keepDays  参数解释：  备份文件可以保存的天数。  约束限制：  新增策略时，此字段必填。  取值范围：  0～3660。取0值时，表示删除该条备份策略。  默认取值：  不涉及。
    * reserveBackups  参数解释：  删除备份策略时是否保留备份集。  约束限制：  仅在keep_days填写0时生效，删除备份策略时，此字段必填。 备份策略可能关联多个已生成的备份集，如果设置本字段为false，所有关联此策略的备份数据都会被立即清理，请谨慎操作。  取值范围：  true：表示保留该条备份策略关联的自动备份。 false：表示删除该条备份策略的同时，立即删除该条策略关联的自动备份。  默认取值：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'period' => 'string',
            'keepDays' => 'int',
            'reserveBackups' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  参数解释：  备份策略ID。  约束限制：  备份策略可能关联多个已生成的备份集，修改、删除策略会对该策略所关联的已生成的备份集生效。如果修改某策略的备份保留天数小于原保留天数或删除某策略，可能会导致关联该条策略的现有全量备份过期删除，请检查策略后再次确认。  取值范围：  不填写ID时，表示新增一条备份策略。 填写当前存在的备份策略ID时，表示修改或删除该条备份策略的内容，ID获取方法请参见查询稀疏备份策略接口。 如您要删除该备份策略，请填写其keep_days为0，period为null，同时必须填写reserve_backups来说明是否保留已生成的与该条备份策略关联的自动备份。 如您要修改该备份策略，至少需要填写period、keep_days其中之一。  默认取值：  不涉及。
    * period  参数解释：  备份周期配置。  约束限制：  该字段为UTC时区的Cron表达式，和备份时间段start_time共同作用。实例基础备份策略的start_time获取方法请参见查询自动备份策略接口，稀疏备份策略的start_time与基础备份策略一致。 比如当地时区为UTC+08:00，接口查询到的start_time为21:00-22:00时，对应的备份时间是当地时间05:00-06:00。当您设置稀疏备份策略的period为1 * *，意为该条策略将在UTC时区的每月1号21:00-22:00执行任务，也即您所在的UTC+08:00时区的每月2号05:00-06:00执行任务。 新增策略时，此字段必填。  取值范围：  格式必须为“日期 月份 星期”形式的Cron表达式，时区为UTC时区，且需要符合周策略、月策略或者年策略的形式，规则如下： · 周策略 日期需填写*，月份需填写*。星期支持填写1~7（1表示星期一，2表示星期二，依次类推），支持填写多个数字，需以逗号隔开。 取值示例： \\* \\* 6 表示每周六执行任务。 \\* \\* 1,2,3 表示每周一、二、三执行任务。 · 月策略 月份需填写*，星期需填写*。日期支持填写1~28和特殊字符L（表示最后一天），支持填写多个数字，需以逗号隔开。 取值示例： 1,2 * * 表示每月1号、2号执行任务。 L * * 表示每月的最后一天执行任务。 · 年策略 星期需填写*。日期支持填写1~31，月份支持填写1~12，日期和月份的组合需要为有效的日期。 取值示例： 15 3 * 表示每年的3月15日执行任务。  默认取值：  不涉及。
    * keepDays  参数解释：  备份文件可以保存的天数。  约束限制：  新增策略时，此字段必填。  取值范围：  0～3660。取0值时，表示删除该条备份策略。  默认取值：  不涉及。
    * reserveBackups  参数解释：  删除备份策略时是否保留备份集。  约束限制：  仅在keep_days填写0时生效，删除备份策略时，此字段必填。 备份策略可能关联多个已生成的备份集，如果设置本字段为false，所有关联此策略的备份数据都会被立即清理，请谨慎操作。  取值范围：  true：表示保留该条备份策略关联的自动备份。 false：表示删除该条备份策略的同时，立即删除该条策略关联的自动备份。  默认取值：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'period' => null,
        'keepDays' => null,
        'reserveBackups' => null
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
    * id  参数解释：  备份策略ID。  约束限制：  备份策略可能关联多个已生成的备份集，修改、删除策略会对该策略所关联的已生成的备份集生效。如果修改某策略的备份保留天数小于原保留天数或删除某策略，可能会导致关联该条策略的现有全量备份过期删除，请检查策略后再次确认。  取值范围：  不填写ID时，表示新增一条备份策略。 填写当前存在的备份策略ID时，表示修改或删除该条备份策略的内容，ID获取方法请参见查询稀疏备份策略接口。 如您要删除该备份策略，请填写其keep_days为0，period为null，同时必须填写reserve_backups来说明是否保留已生成的与该条备份策略关联的自动备份。 如您要修改该备份策略，至少需要填写period、keep_days其中之一。  默认取值：  不涉及。
    * period  参数解释：  备份周期配置。  约束限制：  该字段为UTC时区的Cron表达式，和备份时间段start_time共同作用。实例基础备份策略的start_time获取方法请参见查询自动备份策略接口，稀疏备份策略的start_time与基础备份策略一致。 比如当地时区为UTC+08:00，接口查询到的start_time为21:00-22:00时，对应的备份时间是当地时间05:00-06:00。当您设置稀疏备份策略的period为1 * *，意为该条策略将在UTC时区的每月1号21:00-22:00执行任务，也即您所在的UTC+08:00时区的每月2号05:00-06:00执行任务。 新增策略时，此字段必填。  取值范围：  格式必须为“日期 月份 星期”形式的Cron表达式，时区为UTC时区，且需要符合周策略、月策略或者年策略的形式，规则如下： · 周策略 日期需填写*，月份需填写*。星期支持填写1~7（1表示星期一，2表示星期二，依次类推），支持填写多个数字，需以逗号隔开。 取值示例： \\* \\* 6 表示每周六执行任务。 \\* \\* 1,2,3 表示每周一、二、三执行任务。 · 月策略 月份需填写*，星期需填写*。日期支持填写1~28和特殊字符L（表示最后一天），支持填写多个数字，需以逗号隔开。 取值示例： 1,2 * * 表示每月1号、2号执行任务。 L * * 表示每月的最后一天执行任务。 · 年策略 星期需填写*。日期支持填写1~31，月份支持填写1~12，日期和月份的组合需要为有效的日期。 取值示例： 15 3 * 表示每年的3月15日执行任务。  默认取值：  不涉及。
    * keepDays  参数解释：  备份文件可以保存的天数。  约束限制：  新增策略时，此字段必填。  取值范围：  0～3660。取0值时，表示删除该条备份策略。  默认取值：  不涉及。
    * reserveBackups  参数解释：  删除备份策略时是否保留备份集。  约束限制：  仅在keep_days填写0时生效，删除备份策略时，此字段必填。 备份策略可能关联多个已生成的备份集，如果设置本字段为false，所有关联此策略的备份数据都会被立即清理，请谨慎操作。  取值范围：  true：表示保留该条备份策略关联的自动备份。 false：表示删除该条备份策略的同时，立即删除该条策略关联的自动备份。  默认取值：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'period' => 'period',
            'keepDays' => 'keep_days',
            'reserveBackups' => 'reserve_backups'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  参数解释：  备份策略ID。  约束限制：  备份策略可能关联多个已生成的备份集，修改、删除策略会对该策略所关联的已生成的备份集生效。如果修改某策略的备份保留天数小于原保留天数或删除某策略，可能会导致关联该条策略的现有全量备份过期删除，请检查策略后再次确认。  取值范围：  不填写ID时，表示新增一条备份策略。 填写当前存在的备份策略ID时，表示修改或删除该条备份策略的内容，ID获取方法请参见查询稀疏备份策略接口。 如您要删除该备份策略，请填写其keep_days为0，period为null，同时必须填写reserve_backups来说明是否保留已生成的与该条备份策略关联的自动备份。 如您要修改该备份策略，至少需要填写period、keep_days其中之一。  默认取值：  不涉及。
    * period  参数解释：  备份周期配置。  约束限制：  该字段为UTC时区的Cron表达式，和备份时间段start_time共同作用。实例基础备份策略的start_time获取方法请参见查询自动备份策略接口，稀疏备份策略的start_time与基础备份策略一致。 比如当地时区为UTC+08:00，接口查询到的start_time为21:00-22:00时，对应的备份时间是当地时间05:00-06:00。当您设置稀疏备份策略的period为1 * *，意为该条策略将在UTC时区的每月1号21:00-22:00执行任务，也即您所在的UTC+08:00时区的每月2号05:00-06:00执行任务。 新增策略时，此字段必填。  取值范围：  格式必须为“日期 月份 星期”形式的Cron表达式，时区为UTC时区，且需要符合周策略、月策略或者年策略的形式，规则如下： · 周策略 日期需填写*，月份需填写*。星期支持填写1~7（1表示星期一，2表示星期二，依次类推），支持填写多个数字，需以逗号隔开。 取值示例： \\* \\* 6 表示每周六执行任务。 \\* \\* 1,2,3 表示每周一、二、三执行任务。 · 月策略 月份需填写*，星期需填写*。日期支持填写1~28和特殊字符L（表示最后一天），支持填写多个数字，需以逗号隔开。 取值示例： 1,2 * * 表示每月1号、2号执行任务。 L * * 表示每月的最后一天执行任务。 · 年策略 星期需填写*。日期支持填写1~31，月份支持填写1~12，日期和月份的组合需要为有效的日期。 取值示例： 15 3 * 表示每年的3月15日执行任务。  默认取值：  不涉及。
    * keepDays  参数解释：  备份文件可以保存的天数。  约束限制：  新增策略时，此字段必填。  取值范围：  0～3660。取0值时，表示删除该条备份策略。  默认取值：  不涉及。
    * reserveBackups  参数解释：  删除备份策略时是否保留备份集。  约束限制：  仅在keep_days填写0时生效，删除备份策略时，此字段必填。 备份策略可能关联多个已生成的备份集，如果设置本字段为false，所有关联此策略的备份数据都会被立即清理，请谨慎操作。  取值范围：  true：表示保留该条备份策略关联的自动备份。 false：表示删除该条备份策略的同时，立即删除该条策略关联的自动备份。  默认取值：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'period' => 'setPeriod',
            'keepDays' => 'setKeepDays',
            'reserveBackups' => 'setReserveBackups'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  参数解释：  备份策略ID。  约束限制：  备份策略可能关联多个已生成的备份集，修改、删除策略会对该策略所关联的已生成的备份集生效。如果修改某策略的备份保留天数小于原保留天数或删除某策略，可能会导致关联该条策略的现有全量备份过期删除，请检查策略后再次确认。  取值范围：  不填写ID时，表示新增一条备份策略。 填写当前存在的备份策略ID时，表示修改或删除该条备份策略的内容，ID获取方法请参见查询稀疏备份策略接口。 如您要删除该备份策略，请填写其keep_days为0，period为null，同时必须填写reserve_backups来说明是否保留已生成的与该条备份策略关联的自动备份。 如您要修改该备份策略，至少需要填写period、keep_days其中之一。  默认取值：  不涉及。
    * period  参数解释：  备份周期配置。  约束限制：  该字段为UTC时区的Cron表达式，和备份时间段start_time共同作用。实例基础备份策略的start_time获取方法请参见查询自动备份策略接口，稀疏备份策略的start_time与基础备份策略一致。 比如当地时区为UTC+08:00，接口查询到的start_time为21:00-22:00时，对应的备份时间是当地时间05:00-06:00。当您设置稀疏备份策略的period为1 * *，意为该条策略将在UTC时区的每月1号21:00-22:00执行任务，也即您所在的UTC+08:00时区的每月2号05:00-06:00执行任务。 新增策略时，此字段必填。  取值范围：  格式必须为“日期 月份 星期”形式的Cron表达式，时区为UTC时区，且需要符合周策略、月策略或者年策略的形式，规则如下： · 周策略 日期需填写*，月份需填写*。星期支持填写1~7（1表示星期一，2表示星期二，依次类推），支持填写多个数字，需以逗号隔开。 取值示例： \\* \\* 6 表示每周六执行任务。 \\* \\* 1,2,3 表示每周一、二、三执行任务。 · 月策略 月份需填写*，星期需填写*。日期支持填写1~28和特殊字符L（表示最后一天），支持填写多个数字，需以逗号隔开。 取值示例： 1,2 * * 表示每月1号、2号执行任务。 L * * 表示每月的最后一天执行任务。 · 年策略 星期需填写*。日期支持填写1~31，月份支持填写1~12，日期和月份的组合需要为有效的日期。 取值示例： 15 3 * 表示每年的3月15日执行任务。  默认取值：  不涉及。
    * keepDays  参数解释：  备份文件可以保存的天数。  约束限制：  新增策略时，此字段必填。  取值范围：  0～3660。取0值时，表示删除该条备份策略。  默认取值：  不涉及。
    * reserveBackups  参数解释：  删除备份策略时是否保留备份集。  约束限制：  仅在keep_days填写0时生效，删除备份策略时，此字段必填。 备份策略可能关联多个已生成的备份集，如果设置本字段为false，所有关联此策略的备份数据都会被立即清理，请谨慎操作。  取值范围：  true：表示保留该条备份策略关联的自动备份。 false：表示删除该条备份策略的同时，立即删除该条策略关联的自动备份。  默认取值：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'period' => 'getPeriod',
            'keepDays' => 'getKeepDays',
            'reserveBackups' => 'getReserveBackups'
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
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['keepDays'] = isset($data['keepDays']) ? $data['keepDays'] : null;
        $this->container['reserveBackups'] = isset($data['reserveBackups']) ? $data['reserveBackups'] : null;
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
    *  参数解释：  备份策略ID。  约束限制：  备份策略可能关联多个已生成的备份集，修改、删除策略会对该策略所关联的已生成的备份集生效。如果修改某策略的备份保留天数小于原保留天数或删除某策略，可能会导致关联该条策略的现有全量备份过期删除，请检查策略后再次确认。  取值范围：  不填写ID时，表示新增一条备份策略。 填写当前存在的备份策略ID时，表示修改或删除该条备份策略的内容，ID获取方法请参见查询稀疏备份策略接口。 如您要删除该备份策略，请填写其keep_days为0，period为null，同时必须填写reserve_backups来说明是否保留已生成的与该条备份策略关联的自动备份。 如您要修改该备份策略，至少需要填写period、keep_days其中之一。  默认取值：  不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 参数解释：  备份策略ID。  约束限制：  备份策略可能关联多个已生成的备份集，修改、删除策略会对该策略所关联的已生成的备份集生效。如果修改某策略的备份保留天数小于原保留天数或删除某策略，可能会导致关联该条策略的现有全量备份过期删除，请检查策略后再次确认。  取值范围：  不填写ID时，表示新增一条备份策略。 填写当前存在的备份策略ID时，表示修改或删除该条备份策略的内容，ID获取方法请参见查询稀疏备份策略接口。 如您要删除该备份策略，请填写其keep_days为0，period为null，同时必须填写reserve_backups来说明是否保留已生成的与该条备份策略关联的自动备份。 如您要修改该备份策略，至少需要填写period、keep_days其中之一。  默认取值：  不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets period
    *  参数解释：  备份周期配置。  约束限制：  该字段为UTC时区的Cron表达式，和备份时间段start_time共同作用。实例基础备份策略的start_time获取方法请参见查询自动备份策略接口，稀疏备份策略的start_time与基础备份策略一致。 比如当地时区为UTC+08:00，接口查询到的start_time为21:00-22:00时，对应的备份时间是当地时间05:00-06:00。当您设置稀疏备份策略的period为1 * *，意为该条策略将在UTC时区的每月1号21:00-22:00执行任务，也即您所在的UTC+08:00时区的每月2号05:00-06:00执行任务。 新增策略时，此字段必填。  取值范围：  格式必须为“日期 月份 星期”形式的Cron表达式，时区为UTC时区，且需要符合周策略、月策略或者年策略的形式，规则如下： · 周策略 日期需填写*，月份需填写*。星期支持填写1~7（1表示星期一，2表示星期二，依次类推），支持填写多个数字，需以逗号隔开。 取值示例： \\* \\* 6 表示每周六执行任务。 \\* \\* 1,2,3 表示每周一、二、三执行任务。 · 月策略 月份需填写*，星期需填写*。日期支持填写1~28和特殊字符L（表示最后一天），支持填写多个数字，需以逗号隔开。 取值示例： 1,2 * * 表示每月1号、2号执行任务。 L * * 表示每月的最后一天执行任务。 · 年策略 星期需填写*。日期支持填写1~31，月份支持填写1~12，日期和月份的组合需要为有效的日期。 取值示例： 15 3 * 表示每年的3月15日执行任务。  默认取值：  不涉及。
    *
    * @return string|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string|null $period 参数解释：  备份周期配置。  约束限制：  该字段为UTC时区的Cron表达式，和备份时间段start_time共同作用。实例基础备份策略的start_time获取方法请参见查询自动备份策略接口，稀疏备份策略的start_time与基础备份策略一致。 比如当地时区为UTC+08:00，接口查询到的start_time为21:00-22:00时，对应的备份时间是当地时间05:00-06:00。当您设置稀疏备份策略的period为1 * *，意为该条策略将在UTC时区的每月1号21:00-22:00执行任务，也即您所在的UTC+08:00时区的每月2号05:00-06:00执行任务。 新增策略时，此字段必填。  取值范围：  格式必须为“日期 月份 星期”形式的Cron表达式，时区为UTC时区，且需要符合周策略、月策略或者年策略的形式，规则如下： · 周策略 日期需填写*，月份需填写*。星期支持填写1~7（1表示星期一，2表示星期二，依次类推），支持填写多个数字，需以逗号隔开。 取值示例： \\* \\* 6 表示每周六执行任务。 \\* \\* 1,2,3 表示每周一、二、三执行任务。 · 月策略 月份需填写*，星期需填写*。日期支持填写1~28和特殊字符L（表示最后一天），支持填写多个数字，需以逗号隔开。 取值示例： 1,2 * * 表示每月1号、2号执行任务。 L * * 表示每月的最后一天执行任务。 · 年策略 星期需填写*。日期支持填写1~31，月份支持填写1~12，日期和月份的组合需要为有效的日期。 取值示例： 15 3 * 表示每年的3月15日执行任务。  默认取值：  不涉及。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets keepDays
    *  参数解释：  备份文件可以保存的天数。  约束限制：  新增策略时，此字段必填。  取值范围：  0～3660。取0值时，表示删除该条备份策略。  默认取值：  不涉及。
    *
    * @return int|null
    */
    public function getKeepDays()
    {
        return $this->container['keepDays'];
    }

    /**
    * Sets keepDays
    *
    * @param int|null $keepDays 参数解释：  备份文件可以保存的天数。  约束限制：  新增策略时，此字段必填。  取值范围：  0～3660。取0值时，表示删除该条备份策略。  默认取值：  不涉及。
    *
    * @return $this
    */
    public function setKeepDays($keepDays)
    {
        $this->container['keepDays'] = $keepDays;
        return $this;
    }

    /**
    * Gets reserveBackups
    *  参数解释：  删除备份策略时是否保留备份集。  约束限制：  仅在keep_days填写0时生效，删除备份策略时，此字段必填。 备份策略可能关联多个已生成的备份集，如果设置本字段为false，所有关联此策略的备份数据都会被立即清理，请谨慎操作。  取值范围：  true：表示保留该条备份策略关联的自动备份。 false：表示删除该条备份策略的同时，立即删除该条策略关联的自动备份。  默认取值：  不涉及。
    *
    * @return bool|null
    */
    public function getReserveBackups()
    {
        return $this->container['reserveBackups'];
    }

    /**
    * Sets reserveBackups
    *
    * @param bool|null $reserveBackups 参数解释：  删除备份策略时是否保留备份集。  约束限制：  仅在keep_days填写0时生效，删除备份策略时，此字段必填。 备份策略可能关联多个已生成的备份集，如果设置本字段为false，所有关联此策略的备份数据都会被立即清理，请谨慎操作。  取值范围：  true：表示保留该条备份策略关联的自动备份。 false：表示删除该条备份策略的同时，立即删除该条策略关联的自动备份。  默认取值：  不涉及。
    *
    * @return $this
    */
    public function setReserveBackups($reserveBackups)
    {
        $this->container['reserveBackups'] = $reserveBackups;
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

