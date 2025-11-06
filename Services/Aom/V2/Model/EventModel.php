<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startsAt  指定上报的事件或者告警产生的时间。仅支持UTC毫秒级时间戳。  例如：2024-10-16 16:03:01需要通过工具转换成UTC毫秒级时间戳：1702759381000  当action值为空时，即上报事件或告警时需要时指定该参数。
    * endsAt  指定清除的事件或者告警清除的时间。仅支持UTC毫秒级时间戳。默认值为0，表示没有清除告警。  例如：2024-10-16 16:03:01需要通过工具转换成UTC毫秒级时间戳：1702759381000  当action值为clear时，即清除告警时需要时指定该参数。
    * timeout  指定AOM自动清除超期告警的时间，最长清除时间不超过15天。单位：毫秒数，一分钟则填写为60000。例如该时间设置为5天的告警，对应毫秒数：7200 * 60000（即：5天 * 24小时 * 60分钟 * 60000毫秒）。如果上报告警时没指定该时间，则默认清除时间为15天。 当action值为clear时，即清除告警时不需要指定该参数。
    * metadata  待上报的事件或者告警的详细信息，为key:value键值对形式。支持如下必填字段： - event_name：事件或者告警名称，类型为String； - event_severity：事件或告警级别。类型为String，支持四种级别：    - Critical：紧急    - Major：重要    - Minor：次要    - Info：提示 - event_type：事件或告警类别。类型为String，支持两种类别：   - event：告警事件   - alarm：普通告警 - resource_provider：事件对应云服务名称。类型为String；  - resource_type：事件对应资源类型。类型为String；  - resource_id：事件对应资源信息。类型为String。 metadata中的value长度为1到2048字符串。
    * annotations  事件或者告警附加字段，可以为空。
    * attachRule  事件或者告警预留字段，可以为空。
    * id  事件或者告警id，产生事件或告警时，系统会自动生成。  当action值为clear时，即清除告警时需要时指定该参数。上报事件或告警时无需传入该参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startsAt' => 'int',
            'endsAt' => 'int',
            'timeout' => 'int',
            'metadata' => 'map[string,string]',
            'annotations' => 'map[string,object]',
            'attachRule' => 'map[string,object]',
            'id' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startsAt  指定上报的事件或者告警产生的时间。仅支持UTC毫秒级时间戳。  例如：2024-10-16 16:03:01需要通过工具转换成UTC毫秒级时间戳：1702759381000  当action值为空时，即上报事件或告警时需要时指定该参数。
    * endsAt  指定清除的事件或者告警清除的时间。仅支持UTC毫秒级时间戳。默认值为0，表示没有清除告警。  例如：2024-10-16 16:03:01需要通过工具转换成UTC毫秒级时间戳：1702759381000  当action值为clear时，即清除告警时需要时指定该参数。
    * timeout  指定AOM自动清除超期告警的时间，最长清除时间不超过15天。单位：毫秒数，一分钟则填写为60000。例如该时间设置为5天的告警，对应毫秒数：7200 * 60000（即：5天 * 24小时 * 60分钟 * 60000毫秒）。如果上报告警时没指定该时间，则默认清除时间为15天。 当action值为clear时，即清除告警时不需要指定该参数。
    * metadata  待上报的事件或者告警的详细信息，为key:value键值对形式。支持如下必填字段： - event_name：事件或者告警名称，类型为String； - event_severity：事件或告警级别。类型为String，支持四种级别：    - Critical：紧急    - Major：重要    - Minor：次要    - Info：提示 - event_type：事件或告警类别。类型为String，支持两种类别：   - event：告警事件   - alarm：普通告警 - resource_provider：事件对应云服务名称。类型为String；  - resource_type：事件对应资源类型。类型为String；  - resource_id：事件对应资源信息。类型为String。 metadata中的value长度为1到2048字符串。
    * annotations  事件或者告警附加字段，可以为空。
    * attachRule  事件或者告警预留字段，可以为空。
    * id  事件或者告警id，产生事件或告警时，系统会自动生成。  当action值为clear时，即清除告警时需要时指定该参数。上报事件或告警时无需传入该参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startsAt' => 'int64',
        'endsAt' => 'int64',
        'timeout' => 'int64',
        'metadata' => null,
        'annotations' => null,
        'attachRule' => null,
        'id' => null
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
    * startsAt  指定上报的事件或者告警产生的时间。仅支持UTC毫秒级时间戳。  例如：2024-10-16 16:03:01需要通过工具转换成UTC毫秒级时间戳：1702759381000  当action值为空时，即上报事件或告警时需要时指定该参数。
    * endsAt  指定清除的事件或者告警清除的时间。仅支持UTC毫秒级时间戳。默认值为0，表示没有清除告警。  例如：2024-10-16 16:03:01需要通过工具转换成UTC毫秒级时间戳：1702759381000  当action值为clear时，即清除告警时需要时指定该参数。
    * timeout  指定AOM自动清除超期告警的时间，最长清除时间不超过15天。单位：毫秒数，一分钟则填写为60000。例如该时间设置为5天的告警，对应毫秒数：7200 * 60000（即：5天 * 24小时 * 60分钟 * 60000毫秒）。如果上报告警时没指定该时间，则默认清除时间为15天。 当action值为clear时，即清除告警时不需要指定该参数。
    * metadata  待上报的事件或者告警的详细信息，为key:value键值对形式。支持如下必填字段： - event_name：事件或者告警名称，类型为String； - event_severity：事件或告警级别。类型为String，支持四种级别：    - Critical：紧急    - Major：重要    - Minor：次要    - Info：提示 - event_type：事件或告警类别。类型为String，支持两种类别：   - event：告警事件   - alarm：普通告警 - resource_provider：事件对应云服务名称。类型为String；  - resource_type：事件对应资源类型。类型为String；  - resource_id：事件对应资源信息。类型为String。 metadata中的value长度为1到2048字符串。
    * annotations  事件或者告警附加字段，可以为空。
    * attachRule  事件或者告警预留字段，可以为空。
    * id  事件或者告警id，产生事件或告警时，系统会自动生成。  当action值为clear时，即清除告警时需要时指定该参数。上报事件或告警时无需传入该参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startsAt' => 'starts_at',
            'endsAt' => 'ends_at',
            'timeout' => 'timeout',
            'metadata' => 'metadata',
            'annotations' => 'annotations',
            'attachRule' => 'attach_rule',
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startsAt  指定上报的事件或者告警产生的时间。仅支持UTC毫秒级时间戳。  例如：2024-10-16 16:03:01需要通过工具转换成UTC毫秒级时间戳：1702759381000  当action值为空时，即上报事件或告警时需要时指定该参数。
    * endsAt  指定清除的事件或者告警清除的时间。仅支持UTC毫秒级时间戳。默认值为0，表示没有清除告警。  例如：2024-10-16 16:03:01需要通过工具转换成UTC毫秒级时间戳：1702759381000  当action值为clear时，即清除告警时需要时指定该参数。
    * timeout  指定AOM自动清除超期告警的时间，最长清除时间不超过15天。单位：毫秒数，一分钟则填写为60000。例如该时间设置为5天的告警，对应毫秒数：7200 * 60000（即：5天 * 24小时 * 60分钟 * 60000毫秒）。如果上报告警时没指定该时间，则默认清除时间为15天。 当action值为clear时，即清除告警时不需要指定该参数。
    * metadata  待上报的事件或者告警的详细信息，为key:value键值对形式。支持如下必填字段： - event_name：事件或者告警名称，类型为String； - event_severity：事件或告警级别。类型为String，支持四种级别：    - Critical：紧急    - Major：重要    - Minor：次要    - Info：提示 - event_type：事件或告警类别。类型为String，支持两种类别：   - event：告警事件   - alarm：普通告警 - resource_provider：事件对应云服务名称。类型为String；  - resource_type：事件对应资源类型。类型为String；  - resource_id：事件对应资源信息。类型为String。 metadata中的value长度为1到2048字符串。
    * annotations  事件或者告警附加字段，可以为空。
    * attachRule  事件或者告警预留字段，可以为空。
    * id  事件或者告警id，产生事件或告警时，系统会自动生成。  当action值为clear时，即清除告警时需要时指定该参数。上报事件或告警时无需传入该参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'startsAt' => 'setStartsAt',
            'endsAt' => 'setEndsAt',
            'timeout' => 'setTimeout',
            'metadata' => 'setMetadata',
            'annotations' => 'setAnnotations',
            'attachRule' => 'setAttachRule',
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startsAt  指定上报的事件或者告警产生的时间。仅支持UTC毫秒级时间戳。  例如：2024-10-16 16:03:01需要通过工具转换成UTC毫秒级时间戳：1702759381000  当action值为空时，即上报事件或告警时需要时指定该参数。
    * endsAt  指定清除的事件或者告警清除的时间。仅支持UTC毫秒级时间戳。默认值为0，表示没有清除告警。  例如：2024-10-16 16:03:01需要通过工具转换成UTC毫秒级时间戳：1702759381000  当action值为clear时，即清除告警时需要时指定该参数。
    * timeout  指定AOM自动清除超期告警的时间，最长清除时间不超过15天。单位：毫秒数，一分钟则填写为60000。例如该时间设置为5天的告警，对应毫秒数：7200 * 60000（即：5天 * 24小时 * 60分钟 * 60000毫秒）。如果上报告警时没指定该时间，则默认清除时间为15天。 当action值为clear时，即清除告警时不需要指定该参数。
    * metadata  待上报的事件或者告警的详细信息，为key:value键值对形式。支持如下必填字段： - event_name：事件或者告警名称，类型为String； - event_severity：事件或告警级别。类型为String，支持四种级别：    - Critical：紧急    - Major：重要    - Minor：次要    - Info：提示 - event_type：事件或告警类别。类型为String，支持两种类别：   - event：告警事件   - alarm：普通告警 - resource_provider：事件对应云服务名称。类型为String；  - resource_type：事件对应资源类型。类型为String；  - resource_id：事件对应资源信息。类型为String。 metadata中的value长度为1到2048字符串。
    * annotations  事件或者告警附加字段，可以为空。
    * attachRule  事件或者告警预留字段，可以为空。
    * id  事件或者告警id，产生事件或告警时，系统会自动生成。  当action值为clear时，即清除告警时需要时指定该参数。上报事件或告警时无需传入该参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'startsAt' => 'getStartsAt',
            'endsAt' => 'getEndsAt',
            'timeout' => 'getTimeout',
            'metadata' => 'getMetadata',
            'annotations' => 'getAnnotations',
            'attachRule' => 'getAttachRule',
            'id' => 'getId'
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
        $this->container['startsAt'] = isset($data['startsAt']) ? $data['startsAt'] : null;
        $this->container['endsAt'] = isset($data['endsAt']) ? $data['endsAt'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['attachRule'] = isset($data['attachRule']) ? $data['attachRule'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['metadata'] === null) {
            $invalidProperties[] = "'metadata' can't be null";
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
    * Gets startsAt
    *  指定上报的事件或者告警产生的时间。仅支持UTC毫秒级时间戳。  例如：2024-10-16 16:03:01需要通过工具转换成UTC毫秒级时间戳：1702759381000  当action值为空时，即上报事件或告警时需要时指定该参数。
    *
    * @return int|null
    */
    public function getStartsAt()
    {
        return $this->container['startsAt'];
    }

    /**
    * Sets startsAt
    *
    * @param int|null $startsAt 指定上报的事件或者告警产生的时间。仅支持UTC毫秒级时间戳。  例如：2024-10-16 16:03:01需要通过工具转换成UTC毫秒级时间戳：1702759381000  当action值为空时，即上报事件或告警时需要时指定该参数。
    *
    * @return $this
    */
    public function setStartsAt($startsAt)
    {
        $this->container['startsAt'] = $startsAt;
        return $this;
    }

    /**
    * Gets endsAt
    *  指定清除的事件或者告警清除的时间。仅支持UTC毫秒级时间戳。默认值为0，表示没有清除告警。  例如：2024-10-16 16:03:01需要通过工具转换成UTC毫秒级时间戳：1702759381000  当action值为clear时，即清除告警时需要时指定该参数。
    *
    * @return int|null
    */
    public function getEndsAt()
    {
        return $this->container['endsAt'];
    }

    /**
    * Sets endsAt
    *
    * @param int|null $endsAt 指定清除的事件或者告警清除的时间。仅支持UTC毫秒级时间戳。默认值为0，表示没有清除告警。  例如：2024-10-16 16:03:01需要通过工具转换成UTC毫秒级时间戳：1702759381000  当action值为clear时，即清除告警时需要时指定该参数。
    *
    * @return $this
    */
    public function setEndsAt($endsAt)
    {
        $this->container['endsAt'] = $endsAt;
        return $this;
    }

    /**
    * Gets timeout
    *  指定AOM自动清除超期告警的时间，最长清除时间不超过15天。单位：毫秒数，一分钟则填写为60000。例如该时间设置为5天的告警，对应毫秒数：7200 * 60000（即：5天 * 24小时 * 60分钟 * 60000毫秒）。如果上报告警时没指定该时间，则默认清除时间为15天。 当action值为clear时，即清除告警时不需要指定该参数。
    *
    * @return int|null
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param int|null $timeout 指定AOM自动清除超期告警的时间，最长清除时间不超过15天。单位：毫秒数，一分钟则填写为60000。例如该时间设置为5天的告警，对应毫秒数：7200 * 60000（即：5天 * 24小时 * 60分钟 * 60000毫秒）。如果上报告警时没指定该时间，则默认清除时间为15天。 当action值为clear时，即清除告警时不需要指定该参数。
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets metadata
    *  待上报的事件或者告警的详细信息，为key:value键值对形式。支持如下必填字段： - event_name：事件或者告警名称，类型为String； - event_severity：事件或告警级别。类型为String，支持四种级别：    - Critical：紧急    - Major：重要    - Minor：次要    - Info：提示 - event_type：事件或告警类别。类型为String，支持两种类别：   - event：告警事件   - alarm：普通告警 - resource_provider：事件对应云服务名称。类型为String；  - resource_type：事件对应资源类型。类型为String；  - resource_id：事件对应资源信息。类型为String。 metadata中的value长度为1到2048字符串。
    *
    * @return map[string,string]
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param map[string,string] $metadata 待上报的事件或者告警的详细信息，为key:value键值对形式。支持如下必填字段： - event_name：事件或者告警名称，类型为String； - event_severity：事件或告警级别。类型为String，支持四种级别：    - Critical：紧急    - Major：重要    - Minor：次要    - Info：提示 - event_type：事件或告警类别。类型为String，支持两种类别：   - event：告警事件   - alarm：普通告警 - resource_provider：事件对应云服务名称。类型为String；  - resource_type：事件对应资源类型。类型为String；  - resource_id：事件对应资源信息。类型为String。 metadata中的value长度为1到2048字符串。
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets annotations
    *  事件或者告警附加字段，可以为空。
    *
    * @return map[string,object]|null
    */
    public function getAnnotations()
    {
        return $this->container['annotations'];
    }

    /**
    * Sets annotations
    *
    * @param map[string,object]|null $annotations 事件或者告警附加字段，可以为空。
    *
    * @return $this
    */
    public function setAnnotations($annotations)
    {
        $this->container['annotations'] = $annotations;
        return $this;
    }

    /**
    * Gets attachRule
    *  事件或者告警预留字段，可以为空。
    *
    * @return map[string,object]|null
    */
    public function getAttachRule()
    {
        return $this->container['attachRule'];
    }

    /**
    * Sets attachRule
    *
    * @param map[string,object]|null $attachRule 事件或者告警预留字段，可以为空。
    *
    * @return $this
    */
    public function setAttachRule($attachRule)
    {
        $this->container['attachRule'] = $attachRule;
        return $this;
    }

    /**
    * Gets id
    *  事件或者告警id，产生事件或告警时，系统会自动生成。  当action值为clear时，即清除告警时需要时指定该参数。上报事件或告警时无需传入该参数。
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
    * @param string|null $id 事件或者告警id，产生事件或告警时，系统会自动生成。  当action值为clear时，即清除告警时需要时指定该参数。上报事件或告警时无需传入该参数。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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

