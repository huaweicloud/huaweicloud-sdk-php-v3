<?php

namespace HuaweiCloud\SDK\PanguLargeModels\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TextCompletionReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TextCompletionReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * prompt  向模型输入的文本信息，最小长度：1，最大长度：模型支持的max_tokens数量乘以系数，默认系数为1.5
    * user  用于代表客户的唯一标识符，最小长度：1，最大长度64
    * stream  流式调用的开启开关，true为开启流式调用，如果要开启流式调用，请使用流式SDK；false为关闭流式调用。默认为关闭状态（当前API Explorer不支持流式，在API Explorer调试时请使用非流式）。
    * temperature  用于控制生成文本的多样性和创造力。参数的取值范围是0到1，其中0表示最低的随机性。一般来说，temperature越低，适合完成确定性的任务。temperature越高，例如0.9，适合完成创造性的任务。temperature参数可以影响语言模型输出的质量和多样性，但也不是唯一的因素。还有其他一些参数，如top_p参数也可以用来调整语言模型的行为和偏好，但不建议同时更改这两个参数。
    * topP  一种替代温度采样的方法，称为nucleus sampling，其中模型考虑具有top_p 概率质量的标记的结果。因此 0.1 意味着只考虑构成前 10% 概率质量的标记。我们通常建议更改此值或温度，但不要同时更改两者。通常建议更改top_p或temperature来调整生成文本的倾向性，但不要同时更改这两个参数。
    * maxTokens  用于控制聊天回复的长度和质量。一般来说，较大的max_tokens值可以生成较长和较完整的回复，但也可能增加生成无关或重复内容的风险。较小的max_tokens值可以生成较短和较简洁的回复，但也可能导致生成不完整或不连贯的内容。因此，需要根据不同的场景和需求来选择合适的max_tokens值。最小值：1，最大值：根据模型不同最大值不同。
    * n  表示对每个问题生成多少条答案。n参数的默认值是1，表示只生成一个答案。如果想要生成多条答案，可以设置n参数为一个大于1的整数，例如n=2。这样，API会返回一个包含2个答案的数组。流式调用时，n只能取1。最小值：1，最大值：2，默认值：1
    * presencePenalty  用于控制生成文本中的重复程度。正值会根据它们到目前为止在文本中的现有频率来惩罚新tokens，从而降低模型逐字重复同一行的可能性。  presence_penalty 参数可以用来提高生成文本的多样性和创造性，避免生成单调或重复的内容。最小值：-2，最大值：2
    * frequencyPenalty  用于调整模型对频繁出现的Token的处理方式。即如果一个Token在训练集中出现的频率较高，那么模型在生成这个Token时会受到一定的惩罚。当frequency_penalty的值为正数时，模型会更倾向于生成出现频率较低的Token，即模型会更倾向于使用不常见的词汇。最小值：-2，最大值：2
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'prompt' => 'string',
            'user' => 'string',
            'stream' => 'bool',
            'temperature' => 'float',
            'topP' => 'float',
            'maxTokens' => 'int',
            'n' => 'int',
            'presencePenalty' => 'float',
            'frequencyPenalty' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * prompt  向模型输入的文本信息，最小长度：1，最大长度：模型支持的max_tokens数量乘以系数，默认系数为1.5
    * user  用于代表客户的唯一标识符，最小长度：1，最大长度64
    * stream  流式调用的开启开关，true为开启流式调用，如果要开启流式调用，请使用流式SDK；false为关闭流式调用。默认为关闭状态（当前API Explorer不支持流式，在API Explorer调试时请使用非流式）。
    * temperature  用于控制生成文本的多样性和创造力。参数的取值范围是0到1，其中0表示最低的随机性。一般来说，temperature越低，适合完成确定性的任务。temperature越高，例如0.9，适合完成创造性的任务。temperature参数可以影响语言模型输出的质量和多样性，但也不是唯一的因素。还有其他一些参数，如top_p参数也可以用来调整语言模型的行为和偏好，但不建议同时更改这两个参数。
    * topP  一种替代温度采样的方法，称为nucleus sampling，其中模型考虑具有top_p 概率质量的标记的结果。因此 0.1 意味着只考虑构成前 10% 概率质量的标记。我们通常建议更改此值或温度，但不要同时更改两者。通常建议更改top_p或temperature来调整生成文本的倾向性，但不要同时更改这两个参数。
    * maxTokens  用于控制聊天回复的长度和质量。一般来说，较大的max_tokens值可以生成较长和较完整的回复，但也可能增加生成无关或重复内容的风险。较小的max_tokens值可以生成较短和较简洁的回复，但也可能导致生成不完整或不连贯的内容。因此，需要根据不同的场景和需求来选择合适的max_tokens值。最小值：1，最大值：根据模型不同最大值不同。
    * n  表示对每个问题生成多少条答案。n参数的默认值是1，表示只生成一个答案。如果想要生成多条答案，可以设置n参数为一个大于1的整数，例如n=2。这样，API会返回一个包含2个答案的数组。流式调用时，n只能取1。最小值：1，最大值：2，默认值：1
    * presencePenalty  用于控制生成文本中的重复程度。正值会根据它们到目前为止在文本中的现有频率来惩罚新tokens，从而降低模型逐字重复同一行的可能性。  presence_penalty 参数可以用来提高生成文本的多样性和创造性，避免生成单调或重复的内容。最小值：-2，最大值：2
    * frequencyPenalty  用于调整模型对频繁出现的Token的处理方式。即如果一个Token在训练集中出现的频率较高，那么模型在生成这个Token时会受到一定的惩罚。当frequency_penalty的值为正数时，模型会更倾向于生成出现频率较低的Token，即模型会更倾向于使用不常见的词汇。最小值：-2，最大值：2
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'prompt' => null,
        'user' => null,
        'stream' => null,
        'temperature' => 'float',
        'topP' => 'float',
        'maxTokens' => 'int32',
        'n' => 'int32',
        'presencePenalty' => 'float',
        'frequencyPenalty' => 'float'
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
    * prompt  向模型输入的文本信息，最小长度：1，最大长度：模型支持的max_tokens数量乘以系数，默认系数为1.5
    * user  用于代表客户的唯一标识符，最小长度：1，最大长度64
    * stream  流式调用的开启开关，true为开启流式调用，如果要开启流式调用，请使用流式SDK；false为关闭流式调用。默认为关闭状态（当前API Explorer不支持流式，在API Explorer调试时请使用非流式）。
    * temperature  用于控制生成文本的多样性和创造力。参数的取值范围是0到1，其中0表示最低的随机性。一般来说，temperature越低，适合完成确定性的任务。temperature越高，例如0.9，适合完成创造性的任务。temperature参数可以影响语言模型输出的质量和多样性，但也不是唯一的因素。还有其他一些参数，如top_p参数也可以用来调整语言模型的行为和偏好，但不建议同时更改这两个参数。
    * topP  一种替代温度采样的方法，称为nucleus sampling，其中模型考虑具有top_p 概率质量的标记的结果。因此 0.1 意味着只考虑构成前 10% 概率质量的标记。我们通常建议更改此值或温度，但不要同时更改两者。通常建议更改top_p或temperature来调整生成文本的倾向性，但不要同时更改这两个参数。
    * maxTokens  用于控制聊天回复的长度和质量。一般来说，较大的max_tokens值可以生成较长和较完整的回复，但也可能增加生成无关或重复内容的风险。较小的max_tokens值可以生成较短和较简洁的回复，但也可能导致生成不完整或不连贯的内容。因此，需要根据不同的场景和需求来选择合适的max_tokens值。最小值：1，最大值：根据模型不同最大值不同。
    * n  表示对每个问题生成多少条答案。n参数的默认值是1，表示只生成一个答案。如果想要生成多条答案，可以设置n参数为一个大于1的整数，例如n=2。这样，API会返回一个包含2个答案的数组。流式调用时，n只能取1。最小值：1，最大值：2，默认值：1
    * presencePenalty  用于控制生成文本中的重复程度。正值会根据它们到目前为止在文本中的现有频率来惩罚新tokens，从而降低模型逐字重复同一行的可能性。  presence_penalty 参数可以用来提高生成文本的多样性和创造性，避免生成单调或重复的内容。最小值：-2，最大值：2
    * frequencyPenalty  用于调整模型对频繁出现的Token的处理方式。即如果一个Token在训练集中出现的频率较高，那么模型在生成这个Token时会受到一定的惩罚。当frequency_penalty的值为正数时，模型会更倾向于生成出现频率较低的Token，即模型会更倾向于使用不常见的词汇。最小值：-2，最大值：2
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'prompt' => 'prompt',
            'user' => 'user',
            'stream' => 'stream',
            'temperature' => 'temperature',
            'topP' => 'top_p',
            'maxTokens' => 'max_tokens',
            'n' => 'n',
            'presencePenalty' => 'presence_penalty',
            'frequencyPenalty' => 'frequency_penalty'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * prompt  向模型输入的文本信息，最小长度：1，最大长度：模型支持的max_tokens数量乘以系数，默认系数为1.5
    * user  用于代表客户的唯一标识符，最小长度：1，最大长度64
    * stream  流式调用的开启开关，true为开启流式调用，如果要开启流式调用，请使用流式SDK；false为关闭流式调用。默认为关闭状态（当前API Explorer不支持流式，在API Explorer调试时请使用非流式）。
    * temperature  用于控制生成文本的多样性和创造力。参数的取值范围是0到1，其中0表示最低的随机性。一般来说，temperature越低，适合完成确定性的任务。temperature越高，例如0.9，适合完成创造性的任务。temperature参数可以影响语言模型输出的质量和多样性，但也不是唯一的因素。还有其他一些参数，如top_p参数也可以用来调整语言模型的行为和偏好，但不建议同时更改这两个参数。
    * topP  一种替代温度采样的方法，称为nucleus sampling，其中模型考虑具有top_p 概率质量的标记的结果。因此 0.1 意味着只考虑构成前 10% 概率质量的标记。我们通常建议更改此值或温度，但不要同时更改两者。通常建议更改top_p或temperature来调整生成文本的倾向性，但不要同时更改这两个参数。
    * maxTokens  用于控制聊天回复的长度和质量。一般来说，较大的max_tokens值可以生成较长和较完整的回复，但也可能增加生成无关或重复内容的风险。较小的max_tokens值可以生成较短和较简洁的回复，但也可能导致生成不完整或不连贯的内容。因此，需要根据不同的场景和需求来选择合适的max_tokens值。最小值：1，最大值：根据模型不同最大值不同。
    * n  表示对每个问题生成多少条答案。n参数的默认值是1，表示只生成一个答案。如果想要生成多条答案，可以设置n参数为一个大于1的整数，例如n=2。这样，API会返回一个包含2个答案的数组。流式调用时，n只能取1。最小值：1，最大值：2，默认值：1
    * presencePenalty  用于控制生成文本中的重复程度。正值会根据它们到目前为止在文本中的现有频率来惩罚新tokens，从而降低模型逐字重复同一行的可能性。  presence_penalty 参数可以用来提高生成文本的多样性和创造性，避免生成单调或重复的内容。最小值：-2，最大值：2
    * frequencyPenalty  用于调整模型对频繁出现的Token的处理方式。即如果一个Token在训练集中出现的频率较高，那么模型在生成这个Token时会受到一定的惩罚。当frequency_penalty的值为正数时，模型会更倾向于生成出现频率较低的Token，即模型会更倾向于使用不常见的词汇。最小值：-2，最大值：2
    *
    * @var string[]
    */
    protected static $setters = [
            'prompt' => 'setPrompt',
            'user' => 'setUser',
            'stream' => 'setStream',
            'temperature' => 'setTemperature',
            'topP' => 'setTopP',
            'maxTokens' => 'setMaxTokens',
            'n' => 'setN',
            'presencePenalty' => 'setPresencePenalty',
            'frequencyPenalty' => 'setFrequencyPenalty'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * prompt  向模型输入的文本信息，最小长度：1，最大长度：模型支持的max_tokens数量乘以系数，默认系数为1.5
    * user  用于代表客户的唯一标识符，最小长度：1，最大长度64
    * stream  流式调用的开启开关，true为开启流式调用，如果要开启流式调用，请使用流式SDK；false为关闭流式调用。默认为关闭状态（当前API Explorer不支持流式，在API Explorer调试时请使用非流式）。
    * temperature  用于控制生成文本的多样性和创造力。参数的取值范围是0到1，其中0表示最低的随机性。一般来说，temperature越低，适合完成确定性的任务。temperature越高，例如0.9，适合完成创造性的任务。temperature参数可以影响语言模型输出的质量和多样性，但也不是唯一的因素。还有其他一些参数，如top_p参数也可以用来调整语言模型的行为和偏好，但不建议同时更改这两个参数。
    * topP  一种替代温度采样的方法，称为nucleus sampling，其中模型考虑具有top_p 概率质量的标记的结果。因此 0.1 意味着只考虑构成前 10% 概率质量的标记。我们通常建议更改此值或温度，但不要同时更改两者。通常建议更改top_p或temperature来调整生成文本的倾向性，但不要同时更改这两个参数。
    * maxTokens  用于控制聊天回复的长度和质量。一般来说，较大的max_tokens值可以生成较长和较完整的回复，但也可能增加生成无关或重复内容的风险。较小的max_tokens值可以生成较短和较简洁的回复，但也可能导致生成不完整或不连贯的内容。因此，需要根据不同的场景和需求来选择合适的max_tokens值。最小值：1，最大值：根据模型不同最大值不同。
    * n  表示对每个问题生成多少条答案。n参数的默认值是1，表示只生成一个答案。如果想要生成多条答案，可以设置n参数为一个大于1的整数，例如n=2。这样，API会返回一个包含2个答案的数组。流式调用时，n只能取1。最小值：1，最大值：2，默认值：1
    * presencePenalty  用于控制生成文本中的重复程度。正值会根据它们到目前为止在文本中的现有频率来惩罚新tokens，从而降低模型逐字重复同一行的可能性。  presence_penalty 参数可以用来提高生成文本的多样性和创造性，避免生成单调或重复的内容。最小值：-2，最大值：2
    * frequencyPenalty  用于调整模型对频繁出现的Token的处理方式。即如果一个Token在训练集中出现的频率较高，那么模型在生成这个Token时会受到一定的惩罚。当frequency_penalty的值为正数时，模型会更倾向于生成出现频率较低的Token，即模型会更倾向于使用不常见的词汇。最小值：-2，最大值：2
    *
    * @var string[]
    */
    protected static $getters = [
            'prompt' => 'getPrompt',
            'user' => 'getUser',
            'stream' => 'getStream',
            'temperature' => 'getTemperature',
            'topP' => 'getTopP',
            'maxTokens' => 'getMaxTokens',
            'n' => 'getN',
            'presencePenalty' => 'getPresencePenalty',
            'frequencyPenalty' => 'getFrequencyPenalty'
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
        $this->container['prompt'] = isset($data['prompt']) ? $data['prompt'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['stream'] = isset($data['stream']) ? $data['stream'] : null;
        $this->container['temperature'] = isset($data['temperature']) ? $data['temperature'] : null;
        $this->container['topP'] = isset($data['topP']) ? $data['topP'] : null;
        $this->container['maxTokens'] = isset($data['maxTokens']) ? $data['maxTokens'] : null;
        $this->container['n'] = isset($data['n']) ? $data['n'] : null;
        $this->container['presencePenalty'] = isset($data['presencePenalty']) ? $data['presencePenalty'] : null;
        $this->container['frequencyPenalty'] = isset($data['frequencyPenalty']) ? $data['frequencyPenalty'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['prompt'] === null) {
            $invalidProperties[] = "'prompt' can't be null";
        }
            if ((mb_strlen($this->container['prompt']) < 1)) {
                $invalidProperties[] = "invalid value for 'prompt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['user']) && (mb_strlen($this->container['user']) > 64)) {
                $invalidProperties[] = "invalid value for 'user', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['user']) && (mb_strlen($this->container['user']) < 1)) {
                $invalidProperties[] = "invalid value for 'user', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['temperature']) && ($this->container['temperature'] > 1)) {
                $invalidProperties[] = "invalid value for 'temperature', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['temperature']) && ($this->container['temperature'] < 0)) {
                $invalidProperties[] = "invalid value for 'temperature', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['topP']) && ($this->container['topP'] > 1)) {
                $invalidProperties[] = "invalid value for 'topP', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['topP']) && ($this->container['topP'] <= 0)) {
                $invalidProperties[] = "invalid value for 'topP', must be bigger than 0.";
            }
            if (!is_null($this->container['maxTokens']) && ($this->container['maxTokens'] < 1)) {
                $invalidProperties[] = "invalid value for 'maxTokens', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['n']) && ($this->container['n'] > 2)) {
                $invalidProperties[] = "invalid value for 'n', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['n']) && ($this->container['n'] < 1)) {
                $invalidProperties[] = "invalid value for 'n', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['presencePenalty']) && ($this->container['presencePenalty'] > 2)) {
                $invalidProperties[] = "invalid value for 'presencePenalty', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['presencePenalty']) && ($this->container['presencePenalty'] < -2)) {
                $invalidProperties[] = "invalid value for 'presencePenalty', must be bigger than or equal to -2.";
            }
            if (!is_null($this->container['frequencyPenalty']) && ($this->container['frequencyPenalty'] > 2)) {
                $invalidProperties[] = "invalid value for 'frequencyPenalty', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['frequencyPenalty']) && ($this->container['frequencyPenalty'] < -2)) {
                $invalidProperties[] = "invalid value for 'frequencyPenalty', must be bigger than or equal to -2.";
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
    * Gets prompt
    *  向模型输入的文本信息，最小长度：1，最大长度：模型支持的max_tokens数量乘以系数，默认系数为1.5
    *
    * @return string
    */
    public function getPrompt()
    {
        return $this->container['prompt'];
    }

    /**
    * Sets prompt
    *
    * @param string $prompt 向模型输入的文本信息，最小长度：1，最大长度：模型支持的max_tokens数量乘以系数，默认系数为1.5
    *
    * @return $this
    */
    public function setPrompt($prompt)
    {
        $this->container['prompt'] = $prompt;
        return $this;
    }

    /**
    * Gets user
    *  用于代表客户的唯一标识符，最小长度：1，最大长度64
    *
    * @return string|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string|null $user 用于代表客户的唯一标识符，最小长度：1，最大长度64
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets stream
    *  流式调用的开启开关，true为开启流式调用，如果要开启流式调用，请使用流式SDK；false为关闭流式调用。默认为关闭状态（当前API Explorer不支持流式，在API Explorer调试时请使用非流式）。
    *
    * @return bool|null
    */
    public function getStream()
    {
        return $this->container['stream'];
    }

    /**
    * Sets stream
    *
    * @param bool|null $stream 流式调用的开启开关，true为开启流式调用，如果要开启流式调用，请使用流式SDK；false为关闭流式调用。默认为关闭状态（当前API Explorer不支持流式，在API Explorer调试时请使用非流式）。
    *
    * @return $this
    */
    public function setStream($stream)
    {
        $this->container['stream'] = $stream;
        return $this;
    }

    /**
    * Gets temperature
    *  用于控制生成文本的多样性和创造力。参数的取值范围是0到1，其中0表示最低的随机性。一般来说，temperature越低，适合完成确定性的任务。temperature越高，例如0.9，适合完成创造性的任务。temperature参数可以影响语言模型输出的质量和多样性，但也不是唯一的因素。还有其他一些参数，如top_p参数也可以用来调整语言模型的行为和偏好，但不建议同时更改这两个参数。
    *
    * @return float|null
    */
    public function getTemperature()
    {
        return $this->container['temperature'];
    }

    /**
    * Sets temperature
    *
    * @param float|null $temperature 用于控制生成文本的多样性和创造力。参数的取值范围是0到1，其中0表示最低的随机性。一般来说，temperature越低，适合完成确定性的任务。temperature越高，例如0.9，适合完成创造性的任务。temperature参数可以影响语言模型输出的质量和多样性，但也不是唯一的因素。还有其他一些参数，如top_p参数也可以用来调整语言模型的行为和偏好，但不建议同时更改这两个参数。
    *
    * @return $this
    */
    public function setTemperature($temperature)
    {
        $this->container['temperature'] = $temperature;
        return $this;
    }

    /**
    * Gets topP
    *  一种替代温度采样的方法，称为nucleus sampling，其中模型考虑具有top_p 概率质量的标记的结果。因此 0.1 意味着只考虑构成前 10% 概率质量的标记。我们通常建议更改此值或温度，但不要同时更改两者。通常建议更改top_p或temperature来调整生成文本的倾向性，但不要同时更改这两个参数。
    *
    * @return float|null
    */
    public function getTopP()
    {
        return $this->container['topP'];
    }

    /**
    * Sets topP
    *
    * @param float|null $topP 一种替代温度采样的方法，称为nucleus sampling，其中模型考虑具有top_p 概率质量的标记的结果。因此 0.1 意味着只考虑构成前 10% 概率质量的标记。我们通常建议更改此值或温度，但不要同时更改两者。通常建议更改top_p或temperature来调整生成文本的倾向性，但不要同时更改这两个参数。
    *
    * @return $this
    */
    public function setTopP($topP)
    {
        $this->container['topP'] = $topP;
        return $this;
    }

    /**
    * Gets maxTokens
    *  用于控制聊天回复的长度和质量。一般来说，较大的max_tokens值可以生成较长和较完整的回复，但也可能增加生成无关或重复内容的风险。较小的max_tokens值可以生成较短和较简洁的回复，但也可能导致生成不完整或不连贯的内容。因此，需要根据不同的场景和需求来选择合适的max_tokens值。最小值：1，最大值：根据模型不同最大值不同。
    *
    * @return int|null
    */
    public function getMaxTokens()
    {
        return $this->container['maxTokens'];
    }

    /**
    * Sets maxTokens
    *
    * @param int|null $maxTokens 用于控制聊天回复的长度和质量。一般来说，较大的max_tokens值可以生成较长和较完整的回复，但也可能增加生成无关或重复内容的风险。较小的max_tokens值可以生成较短和较简洁的回复，但也可能导致生成不完整或不连贯的内容。因此，需要根据不同的场景和需求来选择合适的max_tokens值。最小值：1，最大值：根据模型不同最大值不同。
    *
    * @return $this
    */
    public function setMaxTokens($maxTokens)
    {
        $this->container['maxTokens'] = $maxTokens;
        return $this;
    }

    /**
    * Gets n
    *  表示对每个问题生成多少条答案。n参数的默认值是1，表示只生成一个答案。如果想要生成多条答案，可以设置n参数为一个大于1的整数，例如n=2。这样，API会返回一个包含2个答案的数组。流式调用时，n只能取1。最小值：1，最大值：2，默认值：1
    *
    * @return int|null
    */
    public function getN()
    {
        return $this->container['n'];
    }

    /**
    * Sets n
    *
    * @param int|null $n 表示对每个问题生成多少条答案。n参数的默认值是1，表示只生成一个答案。如果想要生成多条答案，可以设置n参数为一个大于1的整数，例如n=2。这样，API会返回一个包含2个答案的数组。流式调用时，n只能取1。最小值：1，最大值：2，默认值：1
    *
    * @return $this
    */
    public function setN($n)
    {
        $this->container['n'] = $n;
        return $this;
    }

    /**
    * Gets presencePenalty
    *  用于控制生成文本中的重复程度。正值会根据它们到目前为止在文本中的现有频率来惩罚新tokens，从而降低模型逐字重复同一行的可能性。  presence_penalty 参数可以用来提高生成文本的多样性和创造性，避免生成单调或重复的内容。最小值：-2，最大值：2
    *
    * @return float|null
    */
    public function getPresencePenalty()
    {
        return $this->container['presencePenalty'];
    }

    /**
    * Sets presencePenalty
    *
    * @param float|null $presencePenalty 用于控制生成文本中的重复程度。正值会根据它们到目前为止在文本中的现有频率来惩罚新tokens，从而降低模型逐字重复同一行的可能性。  presence_penalty 参数可以用来提高生成文本的多样性和创造性，避免生成单调或重复的内容。最小值：-2，最大值：2
    *
    * @return $this
    */
    public function setPresencePenalty($presencePenalty)
    {
        $this->container['presencePenalty'] = $presencePenalty;
        return $this;
    }

    /**
    * Gets frequencyPenalty
    *  用于调整模型对频繁出现的Token的处理方式。即如果一个Token在训练集中出现的频率较高，那么模型在生成这个Token时会受到一定的惩罚。当frequency_penalty的值为正数时，模型会更倾向于生成出现频率较低的Token，即模型会更倾向于使用不常见的词汇。最小值：-2，最大值：2
    *
    * @return float|null
    */
    public function getFrequencyPenalty()
    {
        return $this->container['frequencyPenalty'];
    }

    /**
    * Sets frequencyPenalty
    *
    * @param float|null $frequencyPenalty 用于调整模型对频繁出现的Token的处理方式。即如果一个Token在训练集中出现的频率较高，那么模型在生成这个Token时会受到一定的惩罚。当frequency_penalty的值为正数时，模型会更倾向于生成出现频率较低的Token，即模型会更倾向于使用不常见的词汇。最小值：-2，最大值：2
    *
    * @return $this
    */
    public function setFrequencyPenalty($frequencyPenalty)
    {
        $this->container['frequencyPenalty'] = $frequencyPenalty;
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

