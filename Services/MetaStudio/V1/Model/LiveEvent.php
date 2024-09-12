<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LiveEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LiveEvent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * timestamp  **参数解释**： 事件戳。从1970-01-01 00:00:00:000开始的毫秒数
    * type  **参数解释**： 事件类型。 * 1 弹幕信息 * 2 用户入场 * 3 用户点赞 * 4 用户送礼 * 5 用户订阅\\关注 * 6 房间观看人数
    * content  事件内容。 事件类型不同，content内容也不同，定义如下所示： - type=1 弹幕信息   content定义：     * user:用户，json     * content: string,弹幕内容     user定义：     * userId：用户id，string     * name：用户姓名，string     * level：用户平台等级，int     * badge：用户牌子名称，string     * badgeLevel：牌子等级，int     举例：   ```json   {     \"timestamp\": 1694481224245,     \"type\": 1,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2027271526\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":17,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0},\\\"content\\\":\\\"***\\\"}\"   }   ``` - type=2 用户入场   content定义：     * user:用户，json     举例：   ```json   {     \"timestamp\": 1694481227655,     \"type\": 2,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2978899271\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":1,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0}}\"   }   ``` - type=3 用户点赞    content定义：     * user：用户，json     举例：   ```json   {     \"timestamp\": 1694481227655,     \"type\": 2,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2978899271\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":1,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0}}\"   }   ``` - type=4 用户送礼   content定义：     * user：用户，json     * gift：礼物信息,json     gift定义：     * giftName：礼物名称，string     * giftNum：礼物数量，int     * totalValue：此处礼物总价值，int     * giftValue：单个礼物价值，int     举例：   ```json   {     \"timestamp\": 1690531652862,     \"type\": 4,     \"content\": \"{\\\"gift\\\":{\\\"giftName\\\":\\\"小星星\\\",\\\"giftNum\\\":10,\\\"totalValue\\\":10,\\\"giftValue\\\":3},\\\"user\\\":{\\\"userId\\\":\\\"douyin_95882940927\\\",\\\"name\\\":\\\"纯爱战士熙熙\\\",\\\"level\\\":2,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0}}\"   }   ``` - type=5 用户订阅    暂未使用 - type=6 房间观看人数   content定义：     * numberOfViewers：房间观看人数，int     举例：   ```json   {     \"timestamp\": 1694481236886,     \"type\": 6,     \"content\": \"{\\\"numberOfViewers\\\":5466}\"   }   ```
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'timestamp' => 'int',
            'type' => 'int',
            'content' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * timestamp  **参数解释**： 事件戳。从1970-01-01 00:00:00:000开始的毫秒数
    * type  **参数解释**： 事件类型。 * 1 弹幕信息 * 2 用户入场 * 3 用户点赞 * 4 用户送礼 * 5 用户订阅\\关注 * 6 房间观看人数
    * content  事件内容。 事件类型不同，content内容也不同，定义如下所示： - type=1 弹幕信息   content定义：     * user:用户，json     * content: string,弹幕内容     user定义：     * userId：用户id，string     * name：用户姓名，string     * level：用户平台等级，int     * badge：用户牌子名称，string     * badgeLevel：牌子等级，int     举例：   ```json   {     \"timestamp\": 1694481224245,     \"type\": 1,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2027271526\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":17,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0},\\\"content\\\":\\\"***\\\"}\"   }   ``` - type=2 用户入场   content定义：     * user:用户，json     举例：   ```json   {     \"timestamp\": 1694481227655,     \"type\": 2,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2978899271\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":1,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0}}\"   }   ``` - type=3 用户点赞    content定义：     * user：用户，json     举例：   ```json   {     \"timestamp\": 1694481227655,     \"type\": 2,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2978899271\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":1,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0}}\"   }   ``` - type=4 用户送礼   content定义：     * user：用户，json     * gift：礼物信息,json     gift定义：     * giftName：礼物名称，string     * giftNum：礼物数量，int     * totalValue：此处礼物总价值，int     * giftValue：单个礼物价值，int     举例：   ```json   {     \"timestamp\": 1690531652862,     \"type\": 4,     \"content\": \"{\\\"gift\\\":{\\\"giftName\\\":\\\"小星星\\\",\\\"giftNum\\\":10,\\\"totalValue\\\":10,\\\"giftValue\\\":3},\\\"user\\\":{\\\"userId\\\":\\\"douyin_95882940927\\\",\\\"name\\\":\\\"纯爱战士熙熙\\\",\\\"level\\\":2,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0}}\"   }   ``` - type=5 用户订阅    暂未使用 - type=6 房间观看人数   content定义：     * numberOfViewers：房间观看人数，int     举例：   ```json   {     \"timestamp\": 1694481236886,     \"type\": 6,     \"content\": \"{\\\"numberOfViewers\\\":5466}\"   }   ```
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'timestamp' => 'int64',
        'type' => 'int32',
        'content' => null
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
    * timestamp  **参数解释**： 事件戳。从1970-01-01 00:00:00:000开始的毫秒数
    * type  **参数解释**： 事件类型。 * 1 弹幕信息 * 2 用户入场 * 3 用户点赞 * 4 用户送礼 * 5 用户订阅\\关注 * 6 房间观看人数
    * content  事件内容。 事件类型不同，content内容也不同，定义如下所示： - type=1 弹幕信息   content定义：     * user:用户，json     * content: string,弹幕内容     user定义：     * userId：用户id，string     * name：用户姓名，string     * level：用户平台等级，int     * badge：用户牌子名称，string     * badgeLevel：牌子等级，int     举例：   ```json   {     \"timestamp\": 1694481224245,     \"type\": 1,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2027271526\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":17,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0},\\\"content\\\":\\\"***\\\"}\"   }   ``` - type=2 用户入场   content定义：     * user:用户，json     举例：   ```json   {     \"timestamp\": 1694481227655,     \"type\": 2,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2978899271\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":1,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0}}\"   }   ``` - type=3 用户点赞    content定义：     * user：用户，json     举例：   ```json   {     \"timestamp\": 1694481227655,     \"type\": 2,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2978899271\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":1,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0}}\"   }   ``` - type=4 用户送礼   content定义：     * user：用户，json     * gift：礼物信息,json     gift定义：     * giftName：礼物名称，string     * giftNum：礼物数量，int     * totalValue：此处礼物总价值，int     * giftValue：单个礼物价值，int     举例：   ```json   {     \"timestamp\": 1690531652862,     \"type\": 4,     \"content\": \"{\\\"gift\\\":{\\\"giftName\\\":\\\"小星星\\\",\\\"giftNum\\\":10,\\\"totalValue\\\":10,\\\"giftValue\\\":3},\\\"user\\\":{\\\"userId\\\":\\\"douyin_95882940927\\\",\\\"name\\\":\\\"纯爱战士熙熙\\\",\\\"level\\\":2,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0}}\"   }   ``` - type=5 用户订阅    暂未使用 - type=6 房间观看人数   content定义：     * numberOfViewers：房间观看人数，int     举例：   ```json   {     \"timestamp\": 1694481236886,     \"type\": 6,     \"content\": \"{\\\"numberOfViewers\\\":5466}\"   }   ```
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'timestamp' => 'timestamp',
            'type' => 'type',
            'content' => 'content'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * timestamp  **参数解释**： 事件戳。从1970-01-01 00:00:00:000开始的毫秒数
    * type  **参数解释**： 事件类型。 * 1 弹幕信息 * 2 用户入场 * 3 用户点赞 * 4 用户送礼 * 5 用户订阅\\关注 * 6 房间观看人数
    * content  事件内容。 事件类型不同，content内容也不同，定义如下所示： - type=1 弹幕信息   content定义：     * user:用户，json     * content: string,弹幕内容     user定义：     * userId：用户id，string     * name：用户姓名，string     * level：用户平台等级，int     * badge：用户牌子名称，string     * badgeLevel：牌子等级，int     举例：   ```json   {     \"timestamp\": 1694481224245,     \"type\": 1,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2027271526\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":17,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0},\\\"content\\\":\\\"***\\\"}\"   }   ``` - type=2 用户入场   content定义：     * user:用户，json     举例：   ```json   {     \"timestamp\": 1694481227655,     \"type\": 2,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2978899271\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":1,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0}}\"   }   ``` - type=3 用户点赞    content定义：     * user：用户，json     举例：   ```json   {     \"timestamp\": 1694481227655,     \"type\": 2,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2978899271\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":1,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0}}\"   }   ``` - type=4 用户送礼   content定义：     * user：用户，json     * gift：礼物信息,json     gift定义：     * giftName：礼物名称，string     * giftNum：礼物数量，int     * totalValue：此处礼物总价值，int     * giftValue：单个礼物价值，int     举例：   ```json   {     \"timestamp\": 1690531652862,     \"type\": 4,     \"content\": \"{\\\"gift\\\":{\\\"giftName\\\":\\\"小星星\\\",\\\"giftNum\\\":10,\\\"totalValue\\\":10,\\\"giftValue\\\":3},\\\"user\\\":{\\\"userId\\\":\\\"douyin_95882940927\\\",\\\"name\\\":\\\"纯爱战士熙熙\\\",\\\"level\\\":2,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0}}\"   }   ``` - type=5 用户订阅    暂未使用 - type=6 房间观看人数   content定义：     * numberOfViewers：房间观看人数，int     举例：   ```json   {     \"timestamp\": 1694481236886,     \"type\": 6,     \"content\": \"{\\\"numberOfViewers\\\":5466}\"   }   ```
    *
    * @var string[]
    */
    protected static $setters = [
            'timestamp' => 'setTimestamp',
            'type' => 'setType',
            'content' => 'setContent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * timestamp  **参数解释**： 事件戳。从1970-01-01 00:00:00:000开始的毫秒数
    * type  **参数解释**： 事件类型。 * 1 弹幕信息 * 2 用户入场 * 3 用户点赞 * 4 用户送礼 * 5 用户订阅\\关注 * 6 房间观看人数
    * content  事件内容。 事件类型不同，content内容也不同，定义如下所示： - type=1 弹幕信息   content定义：     * user:用户，json     * content: string,弹幕内容     user定义：     * userId：用户id，string     * name：用户姓名，string     * level：用户平台等级，int     * badge：用户牌子名称，string     * badgeLevel：牌子等级，int     举例：   ```json   {     \"timestamp\": 1694481224245,     \"type\": 1,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2027271526\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":17,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0},\\\"content\\\":\\\"***\\\"}\"   }   ``` - type=2 用户入场   content定义：     * user:用户，json     举例：   ```json   {     \"timestamp\": 1694481227655,     \"type\": 2,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2978899271\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":1,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0}}\"   }   ``` - type=3 用户点赞    content定义：     * user：用户，json     举例：   ```json   {     \"timestamp\": 1694481227655,     \"type\": 2,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2978899271\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":1,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0}}\"   }   ``` - type=4 用户送礼   content定义：     * user：用户，json     * gift：礼物信息,json     gift定义：     * giftName：礼物名称，string     * giftNum：礼物数量，int     * totalValue：此处礼物总价值，int     * giftValue：单个礼物价值，int     举例：   ```json   {     \"timestamp\": 1690531652862,     \"type\": 4,     \"content\": \"{\\\"gift\\\":{\\\"giftName\\\":\\\"小星星\\\",\\\"giftNum\\\":10,\\\"totalValue\\\":10,\\\"giftValue\\\":3},\\\"user\\\":{\\\"userId\\\":\\\"douyin_95882940927\\\",\\\"name\\\":\\\"纯爱战士熙熙\\\",\\\"level\\\":2,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0}}\"   }   ``` - type=5 用户订阅    暂未使用 - type=6 房间观看人数   content定义：     * numberOfViewers：房间观看人数，int     举例：   ```json   {     \"timestamp\": 1694481236886,     \"type\": 6,     \"content\": \"{\\\"numberOfViewers\\\":5466}\"   }   ```
    *
    * @var string[]
    */
    protected static $getters = [
            'timestamp' => 'getTimestamp',
            'type' => 'getType',
            'content' => 'getContent'
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
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
            if (($this->container['timestamp'] > 4102415999000)) {
                $invalidProperties[] = "invalid value for 'timestamp', must be smaller than or equal to 4102415999000.";
            }
            if (($this->container['timestamp'] < 0)) {
                $invalidProperties[] = "invalid value for 'timestamp', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && ($this->container['type'] > 100)) {
                $invalidProperties[] = "invalid value for 'type', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['type']) && ($this->container['type'] < 0)) {
                $invalidProperties[] = "invalid value for 'type', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) > 4096)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) < 0)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 0.";
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
    * Gets timestamp
    *  **参数解释**： 事件戳。从1970-01-01 00:00:00:000开始的毫秒数
    *
    * @return int
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param int $timestamp **参数解释**： 事件戳。从1970-01-01 00:00:00:000开始的毫秒数
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 事件类型。 * 1 弹幕信息 * 2 用户入场 * 3 用户点赞 * 4 用户送礼 * 5 用户订阅\\关注 * 6 房间观看人数
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type **参数解释**： 事件类型。 * 1 弹幕信息 * 2 用户入场 * 3 用户点赞 * 4 用户送礼 * 5 用户订阅\\关注 * 6 房间观看人数
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets content
    *  事件内容。 事件类型不同，content内容也不同，定义如下所示： - type=1 弹幕信息   content定义：     * user:用户，json     * content: string,弹幕内容     user定义：     * userId：用户id，string     * name：用户姓名，string     * level：用户平台等级，int     * badge：用户牌子名称，string     * badgeLevel：牌子等级，int     举例：   ```json   {     \"timestamp\": 1694481224245,     \"type\": 1,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2027271526\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":17,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0},\\\"content\\\":\\\"***\\\"}\"   }   ``` - type=2 用户入场   content定义：     * user:用户，json     举例：   ```json   {     \"timestamp\": 1694481227655,     \"type\": 2,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2978899271\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":1,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0}}\"   }   ``` - type=3 用户点赞    content定义：     * user：用户，json     举例：   ```json   {     \"timestamp\": 1694481227655,     \"type\": 2,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2978899271\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":1,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0}}\"   }   ``` - type=4 用户送礼   content定义：     * user：用户，json     * gift：礼物信息,json     gift定义：     * giftName：礼物名称，string     * giftNum：礼物数量，int     * totalValue：此处礼物总价值，int     * giftValue：单个礼物价值，int     举例：   ```json   {     \"timestamp\": 1690531652862,     \"type\": 4,     \"content\": \"{\\\"gift\\\":{\\\"giftName\\\":\\\"小星星\\\",\\\"giftNum\\\":10,\\\"totalValue\\\":10,\\\"giftValue\\\":3},\\\"user\\\":{\\\"userId\\\":\\\"douyin_95882940927\\\",\\\"name\\\":\\\"纯爱战士熙熙\\\",\\\"level\\\":2,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0}}\"   }   ``` - type=5 用户订阅    暂未使用 - type=6 房间观看人数   content定义：     * numberOfViewers：房间观看人数，int     举例：   ```json   {     \"timestamp\": 1694481236886,     \"type\": 6,     \"content\": \"{\\\"numberOfViewers\\\":5466}\"   }   ```
    *
    * @return string|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string|null $content 事件内容。 事件类型不同，content内容也不同，定义如下所示： - type=1 弹幕信息   content定义：     * user:用户，json     * content: string,弹幕内容     user定义：     * userId：用户id，string     * name：用户姓名，string     * level：用户平台等级，int     * badge：用户牌子名称，string     * badgeLevel：牌子等级，int     举例：   ```json   {     \"timestamp\": 1694481224245,     \"type\": 1,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2027271526\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":17,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0},\\\"content\\\":\\\"***\\\"}\"   }   ``` - type=2 用户入场   content定义：     * user:用户，json     举例：   ```json   {     \"timestamp\": 1694481227655,     \"type\": 2,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2978899271\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":1,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0}}\"   }   ``` - type=3 用户点赞    content定义：     * user：用户，json     举例：   ```json   {     \"timestamp\": 1694481227655,     \"type\": 2,     \"content\": \"{\\\"user\\\":{\\\"userId\\\":\\\"2978899271\\\",\\\"name\\\":\\\"***\\\",\\\"level\\\":1,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0}}\"   }   ``` - type=4 用户送礼   content定义：     * user：用户，json     * gift：礼物信息,json     gift定义：     * giftName：礼物名称，string     * giftNum：礼物数量，int     * totalValue：此处礼物总价值，int     * giftValue：单个礼物价值，int     举例：   ```json   {     \"timestamp\": 1690531652862,     \"type\": 4,     \"content\": \"{\\\"gift\\\":{\\\"giftName\\\":\\\"小星星\\\",\\\"giftNum\\\":10,\\\"totalValue\\\":10,\\\"giftValue\\\":3},\\\"user\\\":{\\\"userId\\\":\\\"douyin_95882940927\\\",\\\"name\\\":\\\"纯爱战士熙熙\\\",\\\"level\\\":2,\\\"badge\\\":\\\"\\\",\\\"badgeLevel\\\":0}}\"   }   ``` - type=5 用户订阅    暂未使用 - type=6 房间观看人数   content定义：     * numberOfViewers：房间观看人数，int     举例：   ```json   {     \"timestamp\": 1694481236886,     \"type\": 6,     \"content\": \"{\\\"numberOfViewers\\\":5466}\"   }   ```
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
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

